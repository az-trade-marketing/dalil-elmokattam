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
       return view('admin.features.index');

   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create(Request $request)
   {
    return view('admin.features.index');
   }
   public function data()
   {
       $features = Feature::query()->orderByDesc("id")->get();
       return response()->json($features);
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

    $validatedData = $validator->validated();

    $feature = Feature::create($validatedData);
       session()->flash('success', 'تم تحديث بيانات المنطقه بنجاح');
       return response()->json(["message" => "success"], 200);

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
       $feature->update($validator->validated());
       session()->flash('success', 'تم تحديث بيانات القسم بنجاح');
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
    try {
        $feature = Feature::findOrFail($id);
        $feature->delete();
        return response()->json(["message" => "success"], 200);
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return response()->json(["error" => "Permission not found"], 404);
    } catch (\Exception $e) {
        return response()->json(["error" => $e->getMessage()], 500);
    }

   }
}
