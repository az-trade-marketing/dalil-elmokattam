<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:features Read');
    }
    public function index()
    {
        $name = app()->getLocale() == "ar" ? "name_ar" : "name_en";
        $featureNames = Feature::query()->pluck($name)->toArray();
        $features = json_encode($featureNames);
        return view('admin.subscriptions.index',get_defined_vars());
    }
    public function data()
    {
        $subscriptions = Subscription::query()->orderByDesc("id")->get();
        return response()->json($subscriptions);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('admin.subscriptions.index',get_defined_vars());

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
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_ar' => 'nullable|string',
            'description_en' => 'nullable|string',
            // 'type' => 'required|in:monthly,weekly,yearly',
            'price' => 'required|numeric',
            'duration' => 'nullable|integer',

        ]);

        $subscription = Subscription::create($validatedData);
        // dd($subscription);
        $features = $request->features;

        foreach (json_decode($features[0]) as $key => $value) {
            $feature = Feature::where("name_ar", $value->value)->orWhere("name_en", $value->value)->first();
            if ($feature) {
                $subscription->features()->attach($feature->id);
            }
        }


        return response()->json("success",200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subscription = Subscription::find($id);
        $features = $subscription->features->map(function($feature) {
            return app()->getLocale() == "ar" ? $feature->name_ar : $feature->name_en;
        });
        return response()->json(["features" => $features]);
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
        $validatedData = $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_ar' => 'nullable|string',
            'description_en' => 'nullable|string',
            'type' => 'required|in:monthly,weekly,yearly',
            'price' => 'required|numeric',
            'duration' => 'nullable|integer',
        ]);

        $subscription = Subscription::findOrFail($id);
           $features = $request->features;
           $featuresIds = [];
           foreach (json_decode($features[0]) as $key => $value) {
               $feature = Feature::where("name_ar", $value->value)->orWhere("name_en", $value->value)->first();
               if ($feature) {
                   $featuresIds[] = $feature->id;
               }
           }
           $subscription->features()->sync($featuresIds);

        return response()->json("success",200);

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
        $subscription = Subscription::findOrFail($id);
        $subscription->features()->detach();
        $subscription->delete();
        return response()->json(["message" => "success"], 200);
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return response()->json(["error" => "Permission not found"], 404);
    } catch (\Exception $e) {
        return response()->json(["error" => $e->getMessage()], 500);
    }

   }
}
