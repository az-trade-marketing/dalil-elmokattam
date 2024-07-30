<?php

namespace App\Http\Controllers\User;

use App\ModelApi\Tag;
use App\ModelApi\Zone;
use App\ModelApi\Store;
use App\Models\Contact;
use App\ModelApi\Category;
use App\Models\HelpSupport;
use Illuminate\Http\Request;
use App\Http\Resources\TagResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\ZoneResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\StoreResource;
use App\Http\Resources\CategoryResource;
use Illuminate\Support\Facades\Validator;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all_categories()
    {
       $cats= Category::with('stores','tags')->get();
      return response()->json(['isSuccess' => true, 'data' =>CategoryResource::collection($cats)], 200);
    }
    public function all_tags()
    {
       $tags= Tag::with('categories')->get();
      return response()->json(['isSuccess' => true, 'data' =>TagResource::collection($tags)], 200);
    }
    public function all_zones()
    {
       $zones= Zone::with('stores')->get();
      return response()->json(['isSuccess' => true, 'data' =>ZoneResource::collection($zones)], 200);
    }
    public function search(Request $request)
    {
        $query = Store::query();
        $searchTerm = $request->input('key'); // The search term passed as a parameter
        if ($searchTerm) {
            // Search in store name (Arabic and English)
            $query->where(function ($q) use ($searchTerm) {
                $q->where('name_ar', 'like', '%' . $searchTerm . '%')
                  ->orWhere('name_en', 'like', '%' . $searchTerm . '%');
            });

            // Search in category name (Arabic and English)
            $query->orWhereHas('category', function ($q) use ($searchTerm) {
                $q->where(function ($q) use ($searchTerm) {
                    $q->where('name_ar', 'like', '%' . $searchTerm . '%')
                      ->orWhere('name_en', 'like', '%' . $searchTerm . '%');
                });
            });

            // Search in tag names (Arabic and English)
            $query->orWhereHas('category.tags', function ($q) use ($searchTerm) {
                $q->where(function ($q) use ($searchTerm) {
                    $q->where('name_ar', 'like', '%' . $searchTerm . '%')
                      ->orWhere('name_en', 'like', '%' . $searchTerm . '%');
                });
            });
        }

        $stores = $query->get();

        return response()->json([
            'isSuccess' => true,
            'data' => StoreResource::collection( $stores )
        ]);
    }

public function filter(Request $request)
{
    $query = Store::query();

    // Ensure categories are an array
    $categories = $request->has('categories') ? explode(',', $request->categories) : [];
    $tags = $request->has('tags') ? explode(',', $request->tags) : [];

    // Filter by category names (Arabic and English)
    if (!empty($categories)) {
        $query->whereHas('categories', function($q) use ($categories) {
            $q->where(function($q) use ($categories) {
                foreach ($categories as $category) {
                    $q->orWhere('categories.name_ar', 'like', '%' . $category . '%')
                      ->orWhere('categories.name_en', 'like', '%' . $category . '%');
                }
            });
        });
    }

    // Filter by tag names (Arabic and English)
    if (!empty($tags)) {
        $query->whereHas('categories.tags', function($q) use ($tags) {
            $q->where(function($q) use ($tags) {
                foreach ($tags as $tag) {
                    $q->orWhere('tags.name_ar', 'like', '%' . $tag . '%')
                      ->orWhere('tags.name_en', 'like', '%' . $tag . '%');
                }
            });
        });
    }

    // Retrieve the filtered stores
    $stores = $query->get();

    // Return the response
    return response()->json([
        'isSuccess' => true,
        'data' => StoreResource::collection($stores)
    ]);
}



    public function all_stores()
    {
       $stores= Store::with('category','zones','reviews','subscription','category.tags')->get();
      return response()->json(['isSuccess' => true, 'data' =>StoreResource::collection($stores)], 200);
    }
    public function ContactUs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'store_id' =>'required',
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['isSuccess' => false, 'message' => $validator->errors()], 422);
        }

        Contact::create($request->all());

        return response()->json(['isSuccess' => true, 'message' => 'Sent successfully'], 200);
    }
    public function helpSupport(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['isSuccess' => false, 'message' => $validator->errors()], 422);
        }

        HelpSupport::create($request->all());

        return response()->json(['isSuccess' => true, 'message' => 'Sent successfully'], 200);
    }
public function getNearbyStores(Request $request, $radius = 10)
{
    $userLatitude = $request->lat;
    $userLongitude = $request->lon;

    $stores = Store::selectRaw("
        *, ( 6371 * acos( cos( radians(?) ) * cos( radians( lat ) ) * cos( radians( lon ) - radians(?) ) + sin( radians(?) ) * sin( radians( lat ) ) ) ) AS distance
    ", [$userLatitude, $userLongitude, $userLatitude])
    ->having('distance', '<=', $radius)
    ->orderBy('distance')
    ->get();
   return response()->json([
        'isSuccess' => true,
        'data' => StoreResource::collection($stores)
    ]);

}

}
