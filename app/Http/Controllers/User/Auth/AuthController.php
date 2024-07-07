<?php

namespace App\Http\Controllers\User\Auth;

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
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    public function signin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => "false", 'error' => $validator->errors()], 422);
        }

        $email = $request->email;
        $password = $request->password;

        if (Auth::guard('users')->attempt(['email' => $email, 'password' => $password])) {

            $user = User::where('email', $email)->first();
            $token = JWTAuth::fromUser($user);
            return response()->json(['success' => "true", 'user' => $user, 'token' => $token], 200);
        }
        $error = json_decode('{"failed": "you do not have access"}', true);
        return response()->json(['success' => "false", 'error' => $error], 403);
    }
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
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


    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'newPassword' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }

        $user = Auth::guard('users')->user();

        if (!$user) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => $validator->errors()->first(),
                ], 422);
            }

            $user = User::where('email', $request->email)->first();

            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'No user found with this email.',
                ], 404);
            }
        }

        $user->password = Hash::make($request->newPassword);
        $user->save();

        return response()->json([
            'isSuccess' => true,
            'message' => 'Password reset successfully.',
        ], 200);
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
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()->first()], 422);
        }

        // Try to find the user by email
        $user = $this->broker()->getUser($request->only('email'));

        if (!$user) {
            return response()->json([
                'message' => 'User not found.'
            ], 404);
        }

        // Create a password reset token
        $token = $this->broker()->createToken($user);
        // Send the password reset email
        Mail::to($user->email)->send(new PasswordResetEmail($token, $user->email));

        // Check if the email was sent successfully
        return response()->json([
            'message' => 'Password reset link sent successfully.'
        ]);
    }

    // Ensure this method is in the controller to get the password broker
    protected function broker()
    {
        return Password::broker('users');
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
