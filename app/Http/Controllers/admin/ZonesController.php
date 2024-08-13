<?php
namespace App\Http\Controllers\Admin;

use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use MatanYadaev\EloquentSpatial\Objects\Point;
use MatanYadaev\EloquentSpatial\Objects\Polygon;
use MatanYadaev\EloquentSpatial\Objects\LineString;

class ZonesController extends Controller
{
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

    public function create()
    {
        $zones = [];
        return view('admin.zones.create', compact("zones"));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name_ar' => 'required|unique:zones,name_ar',
            'name_en' => 'required|unique:zones,name_en',
            'coordinates' => 'required|string',
            'image' => 'nullable'
        ]);

        $data = $this->getAddData($request);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $avatar = $request->file('image');
            $image = upload($avatar);
            $data['image'] = $image;
        }
        $zone = $this->add($data);

        return response()->json(["message" => "success"], 200);
    }

    public function add(array $data): object
    {
        $zone = new Zone();
        foreach ($data as $key => $column) {
            $zone[$key] = $column;
        }
        $zone->save();
        return $zone;
    }

    public function getAddData(Request $request): array
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

    public function show($id)
    {
        $data = Zone::findOrFail($id);
        return response()->json($data);
    }

    public function edit($id)
    {
        $zone = Zone::withoutGlobalScopes()->selectRaw("*,ST_AsText(ST_Centroid(`coordinates`)) as center")->where("id", $id)->first();
        $area = json_decode($zone['coordinates'][0]->toJson(), true);
        return view('admin.zones.edit', compact("zone", "area"));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'coordinates' => 'required|string',
            'image' => 'nullable'
        ]);

        $data = $this->getAddData($request);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $avatar = $request->file('image');
            $image = upload($avatar);
            $data['image'] = $image;
        }

        $zone = $this->updateData($id, $data);
        Session::flash('success', 'Updated successfully');
        return back();
    }
    public function updateData(string $id, array $data): object
    {
        $zone = Zone::findOrFail($id);
        foreach ($data as $key => $column) {
            $zone[$key] = $column;
        }
        $zone->save();
        return $zone;
    }


    public function destroy($id)
    {
        try {
            $zone = Zone::findOrFail($id);
            $zone->delete();
            return response()->json(["message" => "success"], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(["error" => "Zone not found"], 404);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }
}
