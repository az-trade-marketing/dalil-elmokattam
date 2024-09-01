<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index()
    {

        return view('admin.users.index');
    }
    public function data()
    {
        $results = User::orderByDesc("id")->get();
        $permissions = [
            'canCreate' => auth()->user()->can('users Create'),
            'canDelete' => auth()->user()->can('users Delete')
        ];
        return response()->json([
            'data' => $results,
            'permissions' => $permissions
        ]);
    }
    public function create()
    {
        return view('admin.users.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|unique:users',

        ]);

        $user = new User([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'phone' => $request->phone,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
        ]);

        if ($request->hasFile('photo') && $request->file('photo') != '') {
            $avatar = $request->file('photo');
            $photo = upload($avatar);
            $user->photo = $photo;
        }
        $user->save();
        return response()->json(["message" => "success"], 200);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required|min:6',
            'phone' => 'required|unique:users,phone,' . $id,
        ]);
        $user = User::findOrFail($id);
        $user->update([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'phone' => $request->phone,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
        ]);
        if ($request->filled('password')) {
            $user->password =  Hash::make($request->get('password'));
        }
        if ($request->hasFile('photo') && $request->file('photo') != '') {
            $avatar = $request->file('photo');
            $photo = upload($avatar);
            $user->photo = $photo;
        }else{
            $user->photo = $user->photo;
        }
        $user->save();
        return response()->json(["message" => "success"], 200);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->photo && Storage::exists('images/' . $user->photo)) {
            Storage::delete('images/' . $user->photo);
        }
        $user->delete();
        session()->flash('success', 'تم حذف الحساب بنجاح');
        return response()->json(['message' => 'Category deleted successfully.']);
    }

    public function exportUsers()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
