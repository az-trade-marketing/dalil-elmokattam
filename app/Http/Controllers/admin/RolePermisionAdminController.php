<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RolePermisionAdminController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = Role::where('guard_name', 'admin')->get();

        $groupedPermissions = Permission::where('guard_name', 'admin')->get()->groupBy('cat_name_' . lang());

        return view('admin.admin-roles.index', compact('roles', 'groupedPermissions'));
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::where('guard_name', 'admin')->get();
        return view('admin-roles.permations', compact('permission'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_ar' => 'required|unique:roles,name_ar',
            'name_en' => 'required|unique:roles,name_en',

            // 'permission' => 'required',
        ]);
        $role = Role::create(['name_ar' => $request->input('name_ar'), 'name_en' => $request->input('name_en'), 'guard_name' => 'admin']);
        // Get the selected permissions
        $permissions = $request->input('permissions', []);
        $selectedPermissions = [];

        // Find and add the selected permissions to the role
        foreach ($permissions as $permissionName) {
            $permission = Permission::where('name_ar', $permissionName)->orWhere('name_en', $permissionName)->first();
            if ($permission) {
                $selectedPermissions[] = $permission;
            }
        }

        // Sync the permissions with the role
        $role->syncPermissions($selectedPermissions);
        return redirect()->route('admin-roles')
            ->with('success', 'Role created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            ->where("role_has_permissions.role_id", $id)
            ->get();
        return view('roles.show', compact('role', 'rolePermissions'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        $permission = Permission::where('guard_name', 'admin')->get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        return view('roles.edit', compact('role', 'permission', 'rolePermissions'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_ar' => 'required',
            'name_en' => 'required',
        ]);
        $role = Role::find($id);
        $role->name_en = $request->input('name_en');
        $role->name_ar = $request->input('name_ar');
        $role->save();
       $permissions = $request->input('permissions', []);
       $selectedPermissions = [];
       foreach ($permissions as $permissionName) {
           $permission = Permission::where('name_ar', $permissionName)->orWhere('name_en', $permissionName)->first();
           if ($permission) {
               $selectedPermissions[] = $permission;
           }
       }
       $role->syncPermissions($selectedPermissions);
        return redirect()->route('admin-roles')
            ->with('success', 'Role updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('admin-roles')->with('success', 'Role deleted successfully');
    }
}
