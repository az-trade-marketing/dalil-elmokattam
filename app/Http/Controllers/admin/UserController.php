<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

        public function index()
        {
            $users = User::all();

            return view('admin.users.index', compact('users'));
        }

        public function create()
        {
            return view('admin.users.create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6'
            ]);

            $user = new User([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password'))
            ]);

            $user->save();
            return redirect('/users')->with('success', 'User has been added');
        }

        public function show($id)
        {
            $user = User::findOrFail($id);
            return view('admin.users.show', compact('user'));
        }

        public function edit($id)
        {
            $user = User::findOrFail($id);
            return view('admin.users.edit', compact('user'));
        }

        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'nullable|min:6'
            ]);

            $user = User::findOrFail($id);
            $user->name = $request->get('name');
            $user->email = $request->get('email');

            if ($request->filled('password')) {
                $user->password =  Hash::make($request->get('password'));

            }

            $user->save();
            return redirect('/users')->with('success', 'User has been updated');
        }

        public function destroy($id)
        {
            $user = User::findOrFail($id);
            $user->delete();

            return redirect('/users')->with('success', 'User has been deleted');
        }

}
