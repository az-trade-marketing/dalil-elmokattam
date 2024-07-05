<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateAdminRequest;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admin.admins.index', get_defined_vars());
    }


    public function create()
    {
        $roles =   Role::where('guard_name', 'admin')->get();
        return view('admin.admins.create', get_defined_vars());
    }
    public function store(AdminRequest $request)
    {

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->type = $request->type;
        $admin->email = $request->email;
        $admin->status = $request->status;
        $admin->password =  bcrypt($request->password);
        if (request()->hasFile('photo') && request('photo') != '') {
            $avatar = $request->file('photo');
            $photo = upload($avatar, 'uploads/admin');
            $admin->photo = $photo;
        }
        $admin->save();
        $admin->roles()->sync($request->roles);
        session()->flash('success', 'تم اضافة الحساب بنجاح');
        return back();
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        $roles =   Role::where('guard_name', 'admin')->get();
        return view('admin.admins.edit', ['admin' => $admin, 'roles' => $roles]);
    }

    public function update(UpdateAdminRequest $request, $id)
    {

        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->type = $request->type;
        $admin->email = $request->email;
        $admin->status = $request->status;
        if (request('password')) {
            $admin->password =  bcrypt($request->password);
        } else {
            unset($password);
        }
        if (request()->hasFile('photo') && request('photo') != '') {
            if ($admin->photo && Storage::exists('uploads/admin/' . $admin->photo)) {
                Storage::delete('uploads/admin/' . $admin->photo);
            }
            $avatar = $request->file('photo');
            $photo = upload($avatar, 'uploads/admin');
            $admin->photo = $photo;
        } else {
            $admin->photo = $admin->photo;
        }
        $admin->save();
        DB::table('model_has_roles')->where('model_id', $admin->id)->delete();
        // Assign new roles
        $admin->roles()->sync($request->roles);
        session()->flash('success', 'تم تحديث بيانات الحساب بنجاح');
        return back();
    }
    public function delete($id)
    {
        $admin = Admin::find($id);
        if ($admin->photo && Storage::exists('uploads/admin/' . $admin->photo)) {
            Storage::delete('uploads/admin/' . $admin->photo);
        }
        $admin->delete();
        session()->flash('success', 'تم حذف الحساب بنجاح');
        return back();
    }
    public function activ($id)
    {
        Admin::where('id', $id)->update(['status' => 'active']);
        session()->flash('success', 'تم تفعيل الحساب بنجاح');
        return back();
    }
    public function desactiv($id)
    {
        Admin::where('id', $id)->update(['status' => 'intactive']);
        session()->flash('success', 'تم تعطيل الحساب بنجاح');
        return back();
    }
}
