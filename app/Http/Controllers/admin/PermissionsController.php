<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = Permission::where('guard_name', 'admin')->get();
        return view('admin.permissions.index',get_defined_vars());
    }

    public function data()
    {
        $results = Permission::query()->orderByDesc("id")->get();
        return response()->json($results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name_ar" => "required|string|unique:permissions,name_ar",
            "name_en" => "required|string|unique:permissions,name_en",
        ]);
        try {
            Permission::create([
                "name_ar"       => $request->name_ar,
                "name_en"       => $request->name_en,
                "cat_name_ar"   => $request->cat_name_ar,
                "cat_name_en"   => $request->cat_name_en,
            ]);

            return response()->json(["message" => "success"], 200);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Permission::findOrFail($id);
        return response()->json($data);
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

    public function update(Request $request, $id)
    {
        $request->validate([
            "name_ar" => "required|string|unique:permissions,name_ar," . $id,
            "name_en" => "required|string|unique:permissions,name_en," . $id,
        ]);
    
        try {
            $permission = Permission::findOrFail($id);
    
            $permission->update([
                "name_ar"       => $request->name_ar,
                "name_en"       => $request->name_en,
                "cat_name_ar"   => $request->cat_name_ar,
                "cat_name_en"   => $request->cat_name_en,
            ]);
    
            return response()->json(["message" => "success"], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(["error" => "Permission not found"], 404);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $permission = Permission::findOrFail($id);
            $permission->delete();
            return response()->json(["message" => "success"], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(["error" => "Permission not found"], 404);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }

}
