<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Area;
use App\Models\Zone;
use App\Models\Admin;
use App\Models\Store;
use App\Models\Category;
use Illuminate\Support\Arr;
use App\Models\GallaryStore;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    public function user_store($id)
    {
        $store = Store::with('tags')->findOrFail($id);
        $admins = Admin::all();
        $categories = Category::all();
        $zones = Zone::all();
        $subscriptions = Subscription::all();

       return view('admin.stores.edit',get_defined_vars());
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
            'subscription_id' => [
                'required_if:role,admin',
                'integer',
                'exists:subscriptions,id',
            ],
            'zone_id' => 'required|integer|exists:zones,id',
            'lat' => 'required|numeric',
            'lon' => 'required|numeric',
            'mobile' => 'required|unique:stores,mobile',
            'email' => 'required|email|unique:stores,email',
            'password' => 'required',
            'duration' => 'required|numeric',
        ]);

        $validatedData['admin_id'] = Auth::guard('admin')->user()->id;

        // Create the store record with the basic data
        $validatedData = Arr::except($validatedData, ['password']);
        $store = Store::create($validatedData);

        $admin = new Admin();
        $admin->name = $store->name_en;
        $admin->email = $store->email;
        $admin->type = "store";
        $admin->store_id = $store->id;
        $admin->password = Hash::make($request->password);
        $admin->name = $store->name_en;
        $admin->save();

        $admin->assignRole("stores");

        // Handle logo upload
        if ($request->hasFile('features.image')) {
            $logo = $request->file('features.image');
            $imagePath = upload($logo);
            $store->update(['logo' => $imagePath]);
        }

        // Handle text
        if ($request->has('features.text')) {
            $store->update(['contacts' => $request->features['text'] ?? null]);
        }
        // Handle video
        if ($request->hasFile('features.vidio')) {
            $video = $request->file('features.vidio');
            $videoPath = upload($video);
            $store->vidio = $videoPath;
        }

        // Handle multiple images
        if ($request->hasFile('features.multiImage')) {
            foreach ($request->file('features.multiImage') as $file) {
                $path = upload($file);
                $gallaryStory = new GallaryStore();
                $gallaryStory->store_id  = $store->id;
                $gallaryStory->image  = $path;
                $gallaryStory->save();
            }
        }
        if ($request->has('tags') && is_array($request->tags)) {
            foreach ($request->tags as $tagId) {
                $decodedData = json_decode($tagId, true);
                $tags = array_map(function($item) {
                    return $item['value'];
                }, $decodedData);
                $tag = Tag::where("name_ar",$tags)->orWhere("name_en",$tags)->first();
                $store->tags()->attach($tag->id);
            }
        }
        $store->expires_at = Carbon::now()->addDays($store->duration);
        $store->save();
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
        $store = Store::with('tags')->findOrFail($id);
        // dd($store->tags);
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
            'subscription_id' => [
                'required_if:role,admin',
                'integer',
                'exists:subscriptions,id',
            ],
            'zone_id' => 'required|integer|exists:zones,id',
            'lat' => 'required|numeric',
            'lon' => 'required|numeric',
            'duration' => 'required|numeric',
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
        // if ($request->hasFile('features.image')) {
        //     $images = $request->file('features.image');
        //     $imagePath = upload($images);
        //     $validatedData['image'] = $imagePath;
        // }

        // Handle text
        if ($request->has('features.text')) {
            $validatedData['contacts'] = $request->features['text'] ?? null;
        }

        // Handle video
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoPath = upload($video);
            $validatedData['vidio'] = $videoPath;
        }
        // Update the store record
        $store->update($validatedData);
        if ($request->deleted_images) {
            $deletedImages = explode(',',$request->deleted_images);
            foreach ($deletedImages as $imageName) {
                deleteFile($imageName);
                GallaryStore::where('store_id', $store->id)->where('image', $imageName)->delete();
            }
        }

        // Handle updated images
        if ($request->hasFile('multiimage')) {
            foreach ($request->file('multiimage') as $file) {
                $path = upload($file);
                $gallaryStory = new GallaryStore();
                $gallaryStory->store_id  = $store->id;
                $gallaryStory->image  = $path;
                $gallaryStory->save();
            }
        }
        if ($request->has('tags')) {
            $store->tags()->sync($request->tags); // Sync tags with the store
        }
        $store->expires_at = Carbon::now()->addDays($store->duration);
        $store->save();
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
