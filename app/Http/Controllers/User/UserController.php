<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function getUserProfile()
    {
        $user = User::where('id', Auth::guard('users')->user()->id)->first();
           $user['photo']=  $user ->photo ? asset('images/' . $user->photo) : null;
        if ($user) {
            return response()->json([
                'userData' => $user,
            ], 200);
        }
        return response()->json(['status' => false, 'message' => 'User not found'], 404);
    }
    public function saveToken(Request $request)
    {
        Auth::guard('users')->user()->update(['device_token'=>$request->device_token]);
        return response()->json(['token saved successfully.']);
    }
  public function editProfile(Request $request)
{
    $authenticatedUserId = Auth::guard('users')->user()->id;
    $validator = Validator::make($request->all(), [
        'email' => 'nullable|email|unique:users,email,' . $authenticatedUserId . ',id',
        'phone' => 'nullable|string|unique:users,phone,' . $authenticatedUserId . ',id',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'message' => $validator->errors()->first(),
        ], 422);
    }

    $user = User::find($authenticatedUserId);
    $user->update($request->all());
    $user->save();

    return response()->json([
        'status' => true,
        'userData' => $user,
    ], 200);
}

    public function editProfileImage(Request $request)
    {

        $user = User::find(Auth::guard('users')->user()->id);
        if (!$user) {
            return response()->json(['status' => false, 'message' => 'User not found'], 310);
        }
        if (request()->hasFile('photo') && request('photo') != '') {
            if ($user->photo && Storage::exists('images/' . $user->photo)) {
                Storage::delete('images/' . $user->photo);
            }
            $avatar = $request->file('photo');
            $photo = upload($avatar);
            $user->photo = $photo;
           $user->save();
        }else {
            return response()->json(['status' => false, 'message' => 'Image not uploaded successfully'], 310);
        }
        return response()->json(['status' => true, 'message' => 'Image  uploaded successfully'], 200);
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
