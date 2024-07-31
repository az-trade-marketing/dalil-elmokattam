<?php

namespace App\Http\Controllers\User\Auth;

use random;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\PasswordResetEmail;
use App\Http\Requests\UserRequest;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;

use App\Models\PasswordReset;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


public function signin(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if ($validator->fails()) {
        return response()->json(['success' => "false", 'error' => $validator->errors()], 422);
    }

    $email = $request->email;
    $password = $request->password;

    // Check if the email exists
    $user = User::where('email', $email)->first();
    if (!$user) {
        return response()->json(['success' => "false", 'message' => 'The email address is incorrect'], 403);
    }

    // Check if the password is correct
    if (!Auth::guard('users')->attempt(['email' => $email, 'password' => $password])) {
        return response()->json(['success' => "false", 'message' => 'The password is incorrect'], 403);
    }

    $token = JWTAuth::fromUser($user);
     return response()->json([
            'success' => true,
            'message' => 'logged in successfully',
            'user' => $user,
            'token' => $token,
        ], 200);

}


    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'lat' => $request->lat,
            'lon' => $request->lon
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'success' => true,
            'message' => 'User registered successfully',
            'user' => $user,
            'token' => $token,
        ], 200);
    }


    // public function resetPassword(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'newPassword' => 'required|min:8',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'status' => false,
    //             'message' => $validator->errors()->first(),
    //         ], 422);
    //     }

    //     $user = Auth::guard('users')->user();

    //     if (!$user) {
    //         $validator = Validator::make($request->all(), [
    //             'email' => 'required|email',
    //         ]);

    //         if ($validator->fails()) {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => $validator->errors()->first(),
    //             ], 422);
    //         }

    //         $user = User::where('email', $request->email)->first();

    //         if (!$user) {
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'No user found with this email.',
    //             ], 404);
    //         }
    //     }

    //     $user->password = Hash::make($request->newPassword);
    //     $user->save();

    //     return response()->json([
    //         'isSuccess' => true,
    //         'message' => 'Password reset successfully.',
    //     ], 200);
    // }

   public function resetPassword(Request $request)
{
    // Validate the request input
    $request->validate([
        'otp' => 'required',
        'newPassword' => 'required|min:6',
    ]);

    // Fetch the PasswordReset entry by token
    $passwordReset = PasswordReset::where('token', $request->otp)->first();

    // Check if the password reset token is invalid
    if (!$passwordReset) {
        return response()->json([
            'message' => 'This password reset otp is invalid.'
        ], 404);
    }

    // Log the entire PasswordReset object
    Log::info('PasswordReset object: ', $passwordReset->toArray());

    // Retrieve the email from the PasswordReset object
    $email = $passwordReset->email;

    // Log the raw email value
    Log::info('Retrieved email before dd: ' . var_export($email, true));



    // Find the user by email
    $user = User::where('email', $email)->first();

    // Check if the user was found
    if (!$user) {
        return response()->json([
            'message' => 'We can\'t find a user with that e-mail address.'
        ], 404);
    }

    // Update the user's password
    $user->password = Hash::make($request->newPassword);
    $user->save();

    // Log the updated password hash
    Log::info('Updated password hash for user ' . $user->email . ': ' . $user->password);

    // Delete the password reset entry
    $passwordReset->delete();

    return response()->json([
        'message' => 'Your password has been reset successfully.'
    ]);
}

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'oldPassword' => 'required',
            'newPassword' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()->first()], 422);
        }

        $user = Auth::guard('users')->user();
        if (!Hash::check($request->oldPassword, $user->password)) {
            return response()->json(['status' => false, 'message' => 'password is incorrect'], 310);
        }
        $user->password = Hash::make($request->input('newPassword'));
        $user->save();

        return response()->json(['isSuccess' => true], 200);
    }


    public function forgetPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'message' => 'We can\'t find a user with that email address.'
            ], 404);
        }

        $token = $this->generateResetToken($user);
        $this->sendPasswordResetEmail($user, $token);

        return response()->json([
            'message' => 'We have emailed your password reset link!'
        ]);
    }

    protected function generateResetToken(User $user)
    {
        $token = mt_rand(100000, 999999);

        PasswordReset::updateOrCreate([
            'email' => $user->email
        ], [
            'token' =>  $token,
            'created_at' => now()
        ]);

        return $token;
    }

    protected function sendPasswordResetEmail(User $user, $token)
    {
        Mail::to($user->email)->send(new PasswordResetEmail($token));
    }
    public function logout()
    {
        $authenticatedUserId = Auth::guard('users')->user()->id;
        $user = User::find($authenticatedUserId);
        $user->tokens->each(function ($token, $key) {
            $token->delete();
        });
        return response()->json(['isSignOut' => true]);
    }
}
