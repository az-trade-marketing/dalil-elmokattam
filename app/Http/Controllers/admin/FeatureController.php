<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FeatureController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('permission:features Read');
    }
   public function index()
   {
       return view('admin.Features.index');
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(Request $request)
   {
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    $validator = Validator::make($request->all(), [
        'name_ar' => 'required|string|max:255',
        'name_en' => 'required|string|max:255',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'message' => $validator->errors()->first(),
        ], 422);
    }
       $validatedData = $request->validated();
       $feature = Feature::create($validatedData);
       session()->flash('success', 'تم تحديث بيانات المنطقه بنجاح');
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
    $validator = Validator::make($request->all(), [
        'name_ar' => 'required|string|max:255',
        'name_en' => 'required|string|max:255',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'message' => $validator->errors()->first(),
        ], 422);
    }
       $feature = Feature::findOrFail($id);
       $feature->update($request->validated());
       session()->flash('success', 'تم تحديث بيانات المنطقه بنجاح');
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
       $feature = Feature::findOrFail($id);
       $feature->delete();

       return response()->json(['message' => 'Feature deleted successfully.']);
   }
}
