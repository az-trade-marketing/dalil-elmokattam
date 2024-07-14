<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:admin Read');
    }

    public function index()
    {
        $roles = Role::get();
        return view('admin.admins.index',compact("roles"));
    }

    public function data()
    {
        $results = Admin::with("roles")->orderByDesc("id")->get();
        $permissions = [
            'canCreate' => auth()->user()->can('admin Create'),
            'canDelete' => auth()->user()->can('admin Delete')
        ];
        return response()->json([
            'data' => $results,
            'permissions' => $permissions
        ]);
    }

    public function create()
    {
        $roles =   Role::where('guard_name', 'admin')->get();
        return view('admin.admins.create', get_defined_vars());
    }

    public function show($id)
    {
        $admin =   Admin::with("roles")->findOrFail($id);
        return response()->json($admin);
    }

    public function store(AdminRequest $request)
    {     
        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->mobile = $request->mobile;
        $admin->status = 1;
        $admin->password = bcrypt($request->password);
        
        if ($request->hasFile('photo') && $request->file('photo') != '') {
            $avatar = $request->file('photo');
            $photo = upload($avatar);
            $admin->photo = $photo;
        }
        
        $admin->save();
        if (count($request->roles)) {
            foreach ($request->roles as $roleId) {
                $role = Role::findById($roleId);
                $admin->assignRole($role);
            }
        }
        return response()->json(["message" => "success"], 200);
        
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
        $admin->type = 'admin';
        $admin->email = $request->email;
        $admin->status = 1;
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
        if (count($request->roles)) {
            foreach ($request->roles as $roleId) {
                $role = Role::findById($roleId);
                $admin->assignRole($role);
            }
        }
        return response()->json(["message" => "success"], 200);
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

    public function updateLanguage(Request $request)
    {
        $user = Admin::find(Auth::user()->id);
        $user->lang = $request->input('language');
        $user->save();

        session()->put('lang', $user->lang);
        app()->setLocale($user->lang);
        return redirect()->back()->with('status', 'Language updated successfully!');
    }

    public function destroy($id)
    {
        try {
            $admin = Admin::findOrFail($id);
            $admin->delete();
            return response()->json(["message" => "success"], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(["error" => "admin not found"], 404);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }

}
