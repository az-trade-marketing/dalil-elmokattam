<?php

namespace App\Http\Controllers\Admin;

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
    public function index()
    {
        //
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
        $validatedData = $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_ar' => 'nullable|string',
            'description_en' => 'nullable|string',
            'type' => 'required|in:monthly,weekly,yearly',
            'price' => 'required|numeric',
            'duration' => 'nullable|integer',
            'status' => 'required|string|in:active,inactive',
            'features' => 'nullable|array',
            'features.*' => 'exists:features,id'
        ]);

        $subscription = Subscription::create($validatedData);
        if (!empty($request->features)) {
            $subscription->features()->sync($request->features);
        }

        return response()->json($subscription, 201);
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
        $validatedData = $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'description_ar' => 'nullable|string',
            'description_en' => 'nullable|string',
            'type' => 'required|in:monthly,weekly,yearly',
            'price' => 'required|numeric',
            'duration' => 'nullable|integer',
            'status' => 'required|string|in:active,inactive',
            'features' => 'nullable|array',
            'features.*' => 'exists:features,id'
        ]);

        $subscription = Subscription::findOrFail($id);
        $subscription->update($validatedData);
        if (!empty($request->features)) {
            $subscription->features()->sync($request->features);
        }

        return response()->json($subscription);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subscription = Subscription::findOrFail($id);
        $subscription->features()->detach();
        $subscription->delete();

        return response()->json(null, 204);
    }
}
