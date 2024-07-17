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
use geoPHP\geoPHP;
use Brian2694\Toastr\Facades\Toastr;

class ZonesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('permission:roles Read');
    // }

    public function index()
    {
        return view('admin.zones.index');
    }

    public function data()
    {
        $results = Zone::query()->orderByDesc("id")->get();
        $permissions = [
            'canCreate' => auth()->user()->can('Zone Create'),
            'canDelete' => auth()->user()->can('Zone Delete')
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
        $data = Zone::findOrFail($id);
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
        $zone = Zone::withoutGlobalScopes()->selectRaw("*,ST_AsText(ST_Centroid(`coordinates`)) as center")->where("id",$id)->first();
        $area = json_decode($zone['coordinates'][0]->toJson(),true);
        return view('admin.zones.edit',compact("zone","area"));
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
            'coordinates' => 'required',
        ]);
        $zone = $this->updateData(id: $id ,data: $this->getAddData(request: $request));
        flash()->success('Updated successfully');
        return back();
    }

    public function updateData(string $id, array $data): bool|string|object
    {
        $zone = Zone::find($id);
        foreach ($data as $key => $column) {
            $zone[$key] = $column;
        }
        $zone->save();
        return $zone;
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
            $permission = Zone::findOrFail($id);
            $permission->delete();
            return response()->json(["message" => "success"], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(["error" => "Permission not found"], 404);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }
}
