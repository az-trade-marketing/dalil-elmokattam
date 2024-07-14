<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:categories Read');
    }
    public function index()
    {
        $tags = Tag::query()->get();
        return view('admin.categories.index',compact("tags"));
    }

    public function cat_cat()
    {
        $results = Category::query()->orderByDesc("id")->get();
        $permissions = [
            'canCreate' => auth()->user()->can('categories Create'),
            'canDelete' => auth()->user()->can('categories Delete')
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
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $avatar = $request->file('image');
            $image = upload($avatar);
            $validatedData['logo'] = $image;
        }
        $category = Category::create($validatedData);
        session()->flash('success', 'تم تحديث بيانات القسم بنجاح');
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
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete the old image if it exists
            $imagePath = image_path($category->logo) ;
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            // Upload the new image
            $avatar = $request->file('image');
            $image = upload($avatar);
            $validatedData = $request->validated();
            $validatedData['logo'] = $image;
            $category->update($validatedData);
        } else {
            $category->update($request->validated());
        }

        session()->flash('success', 'تم تحديث بيانات القسم بنجاح');
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
        $category = Category::findOrFail($id);

        if ($category->image && Storage::exists('uploads/category/' . $category->image)) {
            Storage::delete('uploads/category/' . $category->image);
        }
        $category->delete();

        return response()->json(['message' => 'Category deleted successfully.']);
    }
}
