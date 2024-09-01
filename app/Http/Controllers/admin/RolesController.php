<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:roles Read');
    }

    public function index()
    {
        $results = Role::get();
        $locale = app()->getLocale();
        $catNameColumn = $locale === 'ar' ? 'cat_name_ar' : 'cat_name_en';
        $nameColumn = $locale === 'ar' ? 'name_ar' : 'name_en';

        $permissions = DB::table('permissions')
        ->select('id','name_ar', 'name_en', $catNameColumn)
        ->orderBy($catNameColumn)
        ->get();
        $groupedPermissions = $permissions->groupBy($catNameColumn);

        return view('admin.roles.index',get_defined_vars(),compact("results","groupedPermissions"));
    }

    public function data()
    {
        $results = Role::query()->orderByDesc("id")->get();
        $permissions = [
            'canCreate' => auth()->user()->can('roles Create'),
            'canDelete' => auth()->user()->can('roles Delete')
        ];
        return response()->json([
            'data' => $results,
            'permissions' => $permissions
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.roles.create');
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
        // Sync the permissions with the role
        $permissions = explode(",",$request->input('selected_permissions'));
        $selectedPermissions = [];

        // Find and add the selected permissions to the role
        foreach ($permissions as $permissionId) {
            $permission = Permission::where('id', $permissionId)->first();
            if ($permission) {
                $selectedPermissions[] = $permission;
            }
        }
        // Sync the permissions with the role
        $role->syncPermissions($selectedPermissions);
        return response()->json(["message" => "success"], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Role::findOrFail($id);
        $permissions = DB::table('permissions')
        ->count();
        $allP=false;
        if ($permissions == count($data->permissions)) {
            $allP=true;
        }
        $result = ['id' => $data->id, 'name_ar' => $data->name_ar ,"name_en" =>$data->name_en,'allP' =>$allP, "permissions" => $data->permissions ];
        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // Find and add the selected permissions to the role
        if(count($request->permissions) > 0){
            foreach ($request->permissions as $permissionId) {
                $permission = Permission::where('id', $permissionId)->first();
                if ($permission) {
                    $selectedPermissions[] = $permission;
                }
            }
        }
        // Sync the permissions with the role
        $role->syncPermissions($selectedPermissions);
        return response()->json(["message" => "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Role::find($id);
        $data->delete();
        return response()->json(['message' => 'Category deleted successfully.']);
    }
}
