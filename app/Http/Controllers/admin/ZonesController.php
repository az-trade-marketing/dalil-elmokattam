<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MatanYadaev\EloquentSpatial\Objects\LineString;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Objects\Polygon;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ZonesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('permission:roles Read');
    // }

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
        $zones = [];
        return view('admin.zones.create',compact("zones"));
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
            'name_ar' => 'required|unique:zones,name_ar',
            'name_en' => 'required|unique:zones,name_en',
            'coordinates' => 'required',

        ]);
        $data = $this->getAddData(request: $request);
        $zone = $this->add(data: $data);

        return response()->json(["message" => "success"], 200);
    }

    public function add(array $data): string|object
    {
        $zone = new Zone();
        foreach ($data as $key => $column) {
            if ($key == "coordinates") {
            }
            $zone[$key] = $column;
        }
        $zone->save();
        return $zone;
    } 

    public function getAddData(Object $request): array
    {
        $value = $request['coordinates'];

        foreach(explode('),(',trim($value,'()')) as $index=>$single_array){
            if($index == 0)
            {
                $lastCord = explode(',',$single_array);
            }
            $coords = explode(',',$single_array);
            $polygon[] = new Point($coords[0], $coords[1]);
        }
        $polygon[] = new Point($lastCord[0], $lastCord[1]);
        return [
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'coordinates' => new Polygon([new LineString($polygon)]),
        ];   
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
        //
    }
}
