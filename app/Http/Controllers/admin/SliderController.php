<?php

namespace App\Http\Controllers\Admin;

use App\Models\Store;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::get();
        return view('admin.sliders.index',compact("stores"));
    }
    public function slider_data()
    {
        $results = Slider::with("store")->orderByDesc("id")->get();
        $permissions = [
            'canCreate' => auth()->user()->can('admin Create'),
            'canDelete' => auth()->user()->can('admin Delete')
        ];
        return response()->json([
            'data' => $results,
            'permissions' => $permissions
        ]);
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
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'store_id' => 'required|exists:stores,id',
        ]);


        if ($request->hasFile('photo') && $request->file('photo') != '') {
            $avatar = $request->file('photo');
            $photo = upload($avatar);
            $photo = $photo;
        }else{
            $photo = null;
        }

        Slider::create([
            'title' => $request->title,
            'image' =>  $photo,
            'store_id' => $request->store_id,
        ]);


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
        $slider =   Slider::with("store")->findOrFail($id);
        return response()->json($slider);
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

        $slider = Slider::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'store_id' => 'required|exists:stores,id',
        ]);

        if ($request->hasFile('photo') && $request->file('photo') != '') {
            $avatar = $request->file('photo');
            $photo = upload($avatar);
            $photo = $photo;
        }else{
            $photo =  $slider->image;
        }


        $slider->update([
            'title' => $request->title,
            'store_id' => $request->store_id,
            'image'=>$photo
        ]);

        return response()->json(['message' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $slider = Slider::findOrFail($id);
        $slider->delete();
        return response()->json(['message' => 'success']);
    }
}
