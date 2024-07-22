<?php

namespace App\Http\Controllers\User;

use App\Models\Area;
use App\Models\Store;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\AreaResource;
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
       $cats= Category::with('stores')->get();
      return response()->json(['isSuccess' => true, 'data' =>CategoryResource::collection($cats)], 200);
    }
    public function all_areas()
    {
       $areas= Area::with('stores')->get();
      return response()->json(['isSuccess' => true, 'data' =>AreaResource::collection($areas)], 200);
    }
    public function  storesByCat(Request $request)
    {
        $stores= Store::with('category','area','reviews','subscription')->where('category_id',$request->category_id)->get();
        return response()->json(['isSuccess' => true, 'data' =>StoreResource::collection($stores)], 200);

    }
    public function all_stores()
    {
       $stores= Store::with('category','area','reviews','subscription')->get();
      return response()->json(['isSuccess' => true, 'data' =>StoreResource::collection($stores)], 200);
    }
    public function ContactUs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:contacts',
            'phone' => 'required|string|max:20|unique:contacts',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['isSuccess' => false, 'message' => $validator->errors()], 422);
        }

        Contact::create($request->all());

        return response()->json(['isSuccess' => true, 'message' => 'Sent successfully'], 200);
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
        //
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
        //
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
