<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::all();
        return view('admin.categories.index',get_defined_vars());

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
    public function store(CategoryRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $avatar = $request->file('logo');
            $logo = upload($avatar, 'uploads/category');
            $validatedData['logo'] = $logo;
        }

        $category = Category::create($validatedData);
        session()->flash('success', 'تم تحديث بيانات القسم بنجاح');
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
    public function update(CategoryRequest $request, $id)
    {

        $category = Category::findOrFail($id);
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            // Delete the old logo if it exists
            if ($category->logo && Storage::exists('uploads/category/' . $category->logo)) {
                Storage::delete('uploads/category/' . $category->logo);
            }
            // Upload the new logo
            $avatar = $request->file('logo');
            $logo = upload($avatar, 'uploads/category');
            $validatedData = $request->validated();
            $validatedData['logo'] = $logo;
            $category->update($validatedData);
        } else {
            $category->update($request->validated());
        }

        session()->flash('success', 'تم تحديث بيانات القسم بنجاح');
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
        $category = Category::findOrFail($id);

        if ($category->logo && Storage::exists('uploads/category/' . $category->logo)) {
            Storage::delete('uploads/category/' . $category->logo);
        }
        $category->delete();

        return response()->json(['message' => 'Category deleted successfully.']);
    }
}
