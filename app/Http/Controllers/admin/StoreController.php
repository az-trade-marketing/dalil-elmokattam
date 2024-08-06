<?php

namespace App\Http\Controllers\Admin;

use App\Models\Area;
use App\Models\Zone;
use App\Models\Admin;
use App\Models\Store;
use App\Models\Category;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.stores.index');
    }
    public function data()
    {
        $stores = Store::query()->orderByDesc("id")->get();
        return response()->json($stores);
    }

    public function getCoordinates($id): JsonResponse
    {
        $zone = Zone::selectRaw("*,ST_AsText(ST_Centroid(`coordinates`)) as center")->find($id);
        $area = json_decode($zone['coordinates'][0]->toJson(),true);
        $data = $this->formatCoordinates(coordinates: $area['coordinates']);
        $center = (object)['lat'=>(float)trim(explode(' ',$zone['center'])[1], 'POINT()'), 'lng'=>(float)trim(explode(' ',$zone['center'])[0], 'POINT()')];
        return response()->json(['coordinates'=>$data, 'center'=>$center]);
    }

    public function formatCoordinates(array $coordinates): array
    {
        $data = [];
        foreach ($coordinates as $coordinate) {
            $data[] = (object)['lat' => $coordinate[1], 'lng' => $coordinate[0]];
        }
        return $data;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = Admin::all();
        $categoreis = Category::all();
        $zones = Zone::all();
        $subscriptions = Subscription::all();
       return view('admin.stores.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function store(Request $request)
{

    $validatedData = $request->validate([
        'name_en' => 'required|string|max:255',
        'name_ar' => 'required|string|max:255',
        'description_en' => 'nullable|string|max:255',
        'description_ar' => 'nullable|string|max:255',
        'category_id' => 'required|integer|exists:categories,id',
        'subscription_id' => 'required|integer|exists:subscriptions,id',
        'zone_id' => 'required|integer|exists:zones,id',
        'lat' => 'required|numeric',
        'lon' => 'required|numeric',
        'mobile' => 'required|unique:stores',
        'email' => 'required|email|unique:stores',
    ]);

    $validatedData['admin_id'] = Auth::guard('admin')->user()->id;
    if ($request->hasFile('logo')) {
        $logo = $request->file('logo');

        $imagePath = upload($logo);
        $validatedData['logo'] = $imagePath;
    }
    // Handle image upload
    if ($request->hasFile('features.image')) {
        $images = $request->file('features.image');

            $imagePath = upload($images);
            $validatedData['image'] = $imagePath;

    }

    // Handle text
    if ($request->has('features.text')) {
        $validatedData['contacts'] = $request->features['text']?? null;
    }

    // Handle video
    if ($request->hasFile('features.vidio')) {
        $video = $request->file('features.vidio');
        $videoPath = upload($video);
        $validatedData['vidio'] = $videoPath;
    }

    // Create the store record
    $store = Store::create($validatedData);

    // Handle multiple images
    if ($request->hasFile('features.multiImage')) {
        foreach ($request->file('features.multiImage') as $file) {
            $path = upload($file);
            $store->gallaries()->create(['image' => $path]);
        }
    }

    Session::flash('success', 'Store created successfully');
    return back();
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Store::findOrFail($id);
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
        $store =  Store::find($id);
        $admins = Admin::all();
        $categories = Category::all();
        $zones = Zone::all();
        $subscriptions = Subscription::all();
       return view('admin.stores.edit',get_defined_vars());
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
        $validatedData = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'nullable|string|max:255',
            'description_ar' => 'nullable|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'subscription_id' => 'required|integer|exists:subscriptions,id',
            'zone_id' => 'required|integer|exists:zones,id',
            'lat' => 'required|numeric',
            'lon' => 'required|numeric',
            'mobile' => 'required|unique:stores,mobile,' . $id,
            'email' => 'required|email|unique:stores,email,' . $id,
        ]);

        $store = Store::findOrFail($id);

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $imagePath = upload($logo);
            $validatedData['logo'] = $imagePath;
        }

        // Handle image upload
        if ($request->hasFile('features.image')) {
            $images = $request->file('features.image');
            $imagePath = upload($images);
            $validatedData['image'] = $imagePath;
        }

        // Handle text
        if ($request->has('features.text')) {
            $validatedData['contacts'] = $request->features['text'] ?? null;
        }

        // Handle video
        if ($request->hasFile('features.vidio')) {
            $video = $request->file('features.vidio');
            $videoPath = upload($video);
            $validatedData['vidio'] = $videoPath;
        }

        // Update the store record
        $store->update($validatedData);

        // Handle multiple images
        if ($request->hasFile('features.multiImage')) {
            // Remove existing images if needed
            $store->gallaries()->delete();

            foreach ($request->file('features.multiImage') as $file) {
                $path = upload($file);
                $store->gallaries()->create(['image' => $path]);
            }
        }

        Session::flash('success', 'Updated successfully');
        return back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store = Store::findOrFail($id);
        if ($store->image && Storage::exists('image/' . $store->image)) {
            Storage::delete('image/' . $store->image);
        }
        $store->delete();
        return response()->json(['message' => 'Category deleted successfully.']);
    }
}
