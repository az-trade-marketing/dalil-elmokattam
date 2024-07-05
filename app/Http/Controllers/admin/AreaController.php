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
        $areas = Area::all();
        return view('admin.areas.index',get_defined_vars());

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
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $avatar = $request->file('logo');
            $logo = $this->upload($avatar, 'uploads/area');
            $validatedData['logo'] = $logo;
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
    public function update(AreaRequest $request, $id)
    {

        $area =Area::findOrFail($id);
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            // Delete the old logo if it exists
            if ($area->logo && Storage::exists('uploads/area/' . $area->logo)) {
                Storage::delete('uploads/area/' . $area->logo);
            }
            // Upload the new logo
            $avatar = $request->file('logo');
            $logo = upload($avatar, 'uploads/area');
            $validatedData = $request->validated();
            $validatedData['logo'] = $logo;
            $area->update($validatedData);
        } else {
            $area->update($request->validated());
        }

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
        $area = Area::findOrFail($id);

        if ($area->logo && Storage::exists('uploads/area/' . $area->logo)) {
            Storage::delete('uploads/area/' . $area->logo);
        }
        $area->delete();

        return response()->json(['message' => 'area deleted successfully.']);
    }
}
