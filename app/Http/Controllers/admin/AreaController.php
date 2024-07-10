<?php

namespace App\Http\Controllers\Admin;

use App\Models\Area;
use Illuminate\Http\Request;
use App\Http\Requests\AreaRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.areas.index');
    }

    public function data()
    {
        $results = Area::query()->orderByDesc("id")->get();
        return response()->json($results);
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
    public function store(AreaRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $avatar = $request->file('image');
            $image = upload($avatar);
            $validatedData['image'] = $image;
        }

        $area = Area::create($validatedData);
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
        $data = Area::findOrFail($id);
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AreaRequest $request, $id)
    {

        $area =Area::findOrFail($id);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete the old image if it exists
            if ($area->image && Storage::exists('uploads/area/' . $area->image)) {
                Storage::delete('uploads/area/' . $area->image);
            }
            // Upload the new image
            $avatar = $request->file('image');
            $image = upload($avatar, 'uploads/area');
            $validatedData = $request->validated();
            $validatedData['image'] = $image;
            $area->update($validatedData);
        } else {
            $area->update($request->validated());
        }

        session()->flash('success', 'تم تحديث بيانات المنطقه بنجاح');
        return response()->json('success');
        // return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = Area::findOrFail($id);

        if ($area->image && Storage::exists('uploads/area/' . $area->image)) {
            Storage::delete('uploads/area/' . $area->image);
        }
        $area->delete();

        return response()->json(['message' => 'area deleted successfully.']);
    }
}
