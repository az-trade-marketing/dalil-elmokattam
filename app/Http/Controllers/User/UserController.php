<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function getUserProfile()
    {
        $user = User::where('id', Auth::guard('users')->user()->id)->first();
        if ($user) {
            $locale = app()->getLocale();
            return response()->json([
                'userData' => $user,
            ], 200);
        }
        return response()->json(['status' => false, 'message' => 'User not found'], 404);
    }
    public function editProfile(Request $request)
    {
        $authenticatedUserId = Auth::guard('users')->user()->id;
        $validator = Validator::make($request->all(), [
            'email' => 'nullable|email|unique:users,email,' . $authenticatedUserId . ',id',
            'phone' => 'nullable|string|unique:users,mobile,' . $authenticatedUserId . ',id',
            'name' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }
        $user = User::find($authenticatedUserId);

        $user->email = $request->email === null ? $user->email : $request->email;
        $user->firstname = $request->firstname;
        $user->lastname  = $request->lastname;
        $user->phone = $request->phone == null ? $user->mobile : $request->phone;
        $user->gender = $request->gender;
        $user->date_of_birth = $request->date_of_birth;
        $user->lat = $request->lat;
        $user->lon = $request->lon;
        $user->save();
        return response()->json([
            'status' => true,
            'userData' => $user,
        ], 200);
    }

    public function deleteAccount(Request $request)
    {
        $user = User::where('id', Auth::guard('users')->user()->id)->first();
        if ($user) {
            $user->delete();
            return response()->json([
                'isDeleted' => true,
            ], 200);
        }
        return response()->json([
            'status' => false,
            'message' => 'Account not found',
        ], 310);

    }
}
