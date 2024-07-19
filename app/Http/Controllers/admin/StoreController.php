<?php

namespace App\Http\Controllers\Admin;

use App\Models\Area;
use App\Models\Zone;
use App\Models\Admin;
use App\Models\Store;
use App\Models\Category;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.stores.index');
    }
    public function data()
    {
        $stores = Store::query()->orderByDesc("id")->get();
        return response()->json($stores);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = Admin::all();
        $categoreis = Category::all();
        $zones = Zone::all();
        $subscriptions = Subscription::all();
       return view('admin.stores.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // التحقق من صحة البيانات
        $validatedData = $request->validate([
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required|string|max:255',
            'description_ar' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'subscription_id' => 'required|integer|exists:subscriptions,id',
            'zone_id' => 'required|integer|exists:zones,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $validatedData['admin_id'] = Auth::guard('admin')->user()->id;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $avatar = $request->file('image');
            $image = upload($avatar);
            $validatedData['image'] = $image;
        }
        $store = Store::create($validatedData);
        session()->flash('success', 'تم تحديث بيانات المتجر بنجاح');
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
        $store =  Store::find($id);
        $admins = Admin::all();
        $categories = Category::all();
        $zones = Zone::all();
        $subscriptions = Subscription::all();
       return view('admin.stores.edit',get_defined_vars());
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
            'name_en' => 'required|string|max:255',
            'name_ar' => 'required|string|max:255',
            'description_en' => 'required|string|max:255',
            'description_ar' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'subscription_id' => 'required|integer|exists:subscriptions,id',
            'zone_id' => 'required|integer|exists:zones,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
         $store =  Store::find($id);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $avatar = $request->file('image');
            $image = upload($avatar);
            $validatedData['image'] = $image;
        }
        $store->update($validatedData);
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
        $store = Store::findOrFail($id);
        if ($store->image && Storage::exists('image/' . $store->image)) {
            Storage::delete('image/' . $store->image);
        }
        $store->delete();
        return response()->json(['message' => 'Category deleted successfully.']);
    }
}
