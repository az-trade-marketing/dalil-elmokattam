<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Role::get();
        $locale = app()->getLocale();
        $catNameColumn = $locale === 'ar' ? 'cat_name_ar' : 'cat_name_en';
        $nameColumn = $locale === 'ar' ? 'name_ar' : 'name_en';

        $permissions = DB::table('permissions')
        ->select('name_ar', 'name_en', $catNameColumn)
        ->orderBy($catNameColumn)
        ->get();
        $groupedPermissions = $permissions->groupBy($catNameColumn);

        return view('admin.roles.index',get_defined_vars(),compact("results","groupedPermissions"));
    }

    public function data()
    {
        $results = Role::query()->orderByDesc("id")->get();
        return response()->json($results);
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
        dd($request->all());
        $this->validate($request, [
            'name_ar' => 'required|unique:roles,name_ar',
            'name_en' => 'required|unique:roles,name_en',

            // 'permission' => 'required',
        ]);
        $role = Role::create(['name_ar' => $request->input('name_ar'), 'name_en' => $request->input('name_en'), 'guard_name' => 'admin']);
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
        //
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
        //
    }
}
