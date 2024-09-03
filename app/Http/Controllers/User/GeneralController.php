<?php

namespace App\Http\Controllers\User;

use App\ModelApi\Tag;
use App\ModelApi\Zone;
use App\Models\Slider;
use App\ModelApi\Store;
use App\Models\Contact;
use App\ModelApi\Category;
use App\Models\HelpSupport;
use Illuminate\Http\Request;
use App\Models\PushNotification;
use App\Http\Resources\TagResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\ZoneResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\StoreResource;
use App\Http\Resources\SliderResource;
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
        $cats = Category::with('stores', 'tags')->get();
        return response()->json(['isSuccess' => true, 'data' => CategoryResource::collection($cats)], 200);
    }
    public function all_tags()
    {
        $tags = Tag::with('categories')->get();
        return response()->json(['isSuccess' => true, 'data' => TagResource::collection($tags)], 200);
    }
    public function all_zones()
    {
        $zones = Zone::with('stores')->get();
        return response()->json(['isSuccess' => true, 'data' => ZoneResource::collection($zones)], 200);
    }
    public function search(Request $request)
    {
        $query = Store::query();
        $searchTerm = $request->input('key'); // The search term passed as a parameter
        if ($searchTerm) {
            // Search in store name (Arabic and English)
            $query->where(function ($q) use ($searchTerm) {
                $q->where('name_ar', 'like', '%' . $searchTerm . '%')
                    ->orWhere('name_en', 'like', '%' . $searchTerm . '%')
                    ->orWhere('description_en', 'like', '%' . $searchTerm . '%')
                    ->orWhere('description_ar', 'like', '%' . $searchTerm . '%');
            });

            // Search in category name (Arabic and English)
            $query->orWhereHas('category', function ($q) use ($searchTerm) {
                $q->where(function ($q) use ($searchTerm) {
                    $q->where('name_ar', 'like', '%' . $searchTerm . '%')
                        ->orWhere('name_en', 'like', '%' . $searchTerm . '%')
                        ->orWhere('description_en', 'like', '%' . $searchTerm . '%')
                        ->orWhere('description_ar', 'like', '%' . $searchTerm . '%');
                });
            });

            // Search in tag names (Arabic and English)
            $query->orWhereHas('tags', function ($q) use ($searchTerm) {
                $q->where(function ($q) use ($searchTerm) {
                    $q->where('name_ar', 'like', '%' . $searchTerm . '%')
                        ->orWhere('name_en', 'like', '%' . $searchTerm . '%');
                });
            });
        }

        $stores = $query->get();

        return response()->json([
            'isSuccess' => true,
            'data' => StoreResource::collection($stores)
        ]);
    }


    public function filter(Request $request)
    {
        // التأكد من أن التصنيفات والعلامات هي مصفوفات
        $categories = $request->input('categories', []);
        $tags = $request->input('tags', []);

        // إذا لم يتم إرسال أي تصنيفات أو علامات، لا يتم جلب أي متاجر
        if (empty($categories) && empty($tags)) {
            return response()->json([
                'isSuccess' => false,
                'data' => [],
                'message' => 'No categories and tags provided.'
            ]);
        }

        $query = Store::query();

        // فلترة بناءً على التصنيفات والعلامات ضمن التصنيفات
        if (!empty($categories)) {
            $query->whereHas('category', function ($q) use ($categories, $tags) {
                $q->where(function ($q) use ($categories) {
                    foreach ($categories as $category) {
                        $q->orWhere('categories.name_ar', 'like', '%' . $category . '%')
                            ->orWhere('categories.name_en', 'like', '%' . $category . '%');
                    }
                });

                // إذا كانت العلامات موجودة، فلترة ضمن التصنيفات
                // if (!empty($tags)) {
                //     $q->whereHas('tags', function ($q) use ($tags) {
                //         $q->where(function ($q) use ($tags) {
                //             foreach ($tags as $tag) {
                //                 $q->orWhere('tags.name_ar', 'like', '%' . $tag . '%')
                //                     ->orWhere('tags.name_en', 'like', '%' . $tag . '%');
                //             }
                //         });
                //     });
                // }
            });
        } else {
            // إذا لم تكن هناك تصنيفات ولكن هناك علامات، فلترة بناءً على العلامات فقط
            if (!empty($tags)) {
                $query->whereHas('tags', function ($q) use ($tags) {
                    $q->where(function ($q) use ($tags) {
                        foreach ($tags as $tag) {
                            $q->orWhere('tags.name_ar', 'like', '%' . $tag . '%')
                                ->orWhere('tags.name_en', 'like', '%' . $tag . '%');
                        }
                    });
                });
            }
        }

        // جلب المتاجر التي تم فلترتها
        $stores = $query->get();

        // إذا لم يتم العثور على أي متاجر، إرجاع استجابة فارغة
        if ($stores->isEmpty()) {
            return response()->json([
                'isSuccess' => false,
                'data' => [],
                'message' => 'No stores found for the provided categories and tags.'
            ]);
        }

        // إرجاع الاستجابة مع المتاجر المطابقة
        return response()->json([
            'isSuccess' => true,
            'data' => StoreResource::collection($stores)
        ]);
    }

    public function all_stores()
    {
        $stores = Store::with('category', 'zones', 'reviews', 'subscription', 'tags')->get();
        return response()->json(['isSuccess' => true, 'data' => StoreResource::collection($stores)], 200);
    }
    public function ContactUs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'store_id' => 'required',
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
    public function notification(Request $request)
    {
        $user = Auth::guard('users')->user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $notifications = PushNotification::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        // Loop through notifications to update image URL
        foreach ($notifications as $notification) {
            if ($notification->image) {
                $notification->image = asset('images/' . $notification->image);
            }
        }

        // Return notifications as a JSON response
        return response()->json([
            'status' => 'success',
            'notifications' => $notifications,
        ], 200);
    }
    public function SwipNotification(Request $request)
    {
        $user = Auth::guard('users')->user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }

        $notification = PushNotification::where('user_id', $user->id)->where('id', $request->id)
            ->orderBy('created_at', 'desc')
            ->first();

        $notification->delete();

        // Return notifications as a JSON response
        return response()->json([
            'status' => 'success',
        ], 200);
    }
    public function get_sliders()
    {
        $sliders =  Slider::with('store')->get();
        return response()->json([
            'isSuccess' => true,
            'data' => SliderResource::collection($sliders)
        ]);
    }
    public function isStoreOpen(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'store_id' => 'required|exists:stores,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors()->first()], 422);
        }
        if ($validator->fails()) {
            return response()->json(['status'=>false,'message' => $validator->errors()->first()],422);
         }
        $isOpen = isStoreOpen($request->store_id);
        return $isOpen ? 'online' : 'ofline';
    }
    public function FeaturedStore(Request $request) {
        $featuredStores = Store::whereHas('subscription', function ($query) {
            $query->whereHas('features', function ($query) {
                $query->where('type', 'featured');
            });
        })->get();

        return response()->json([
            'isSuccess' => true,
            'data' => StoreResource::collection($featuredStores)
        ]);
    }

    public function recentlyAdded(Request $request){
        $recentStores = Store::recentlyAdded()->get();
        return response()->json([
            'isSuccess' => true,
            'data' => StoreResource::collection($recentStores)
        ]);
    }
}
