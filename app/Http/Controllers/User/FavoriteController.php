<?php

namespace App\Http\Controllers\User;

use App\Models\Store;
use App\Models\Favorit;
use App\Models\Favorite;
use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Models\PushNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\StoreResource;
use App\Http\Resources\ApartmentResource;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ApartmentResourceMobile;

class FavoriteController extends Controller
{

    public function index()
    {
        $user = Auth::guard('users')->user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        $stores = Store::whereHas('favorites', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();

        return response()->json(['data'=> StoreResource::collection(  $stores) ], 200);
    }


    public function store(Request $request)
    {
        $user = Auth::guard('users')->user();
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
        $validator = Validator::make($request->all(), [
            'store_id' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => "false", 'error' => 'Empty fields'], 422);
        }
        $favorit =  Favorite::create([
            'user_id' => Auth::guard('users')->user()->id,
            'store_id' => $request->store_id,

        ]);
        return response()->json(['isSuccess' => true,'data' => $favorit], 200);

    }


    public function show(string $id)
    {
        //
    }


    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'store_id' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'error' => 'Empty fields'],422);
        }

        $favorit =  Favorite::where('user_id', Auth::guard('users')->user()->id)->where('store_id', $request->store_id)->first();
        if( $favorit){
            $favorit->delete();
        }else{
            $favorit =  Favorite::create([
                'user_id' => Auth::guard('users')->user()->id,
                'store_id' => $request->store_id,

            ]);
        }

        return response()->json(['isSuccess' => true,'data' => $favorit], 200);
    }


}
