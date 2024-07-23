<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Tag;
use Illuminate\Database\QueryException;
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
        $name = app()->getLocale() == "ar" ? "name_ar" : "name_en";
        $tagNames = Tag::query()->pluck($name)->toArray();
        $tags = json_encode($tagNames);
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
            $validatedData['image'] = $image;
        }

        $category = Category::create($validatedData);
        $tags = $request->tags;

        foreach (json_decode($tags[0]) as $key => $value) {
            $tag = Tag::where("name_ar", $value->value)->orWhere("name_en", $value->value)->first();
            if ($tag) {
                $category->tags()->attach($tag->id);
            }else{
                $tag = Tag::create([
                    "name_ar" => $value->value,
                    "name_en" => $value->value,
                ]);
                $category->tags()->attach($tag->id);
            }
        }

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
        $category = Category::find($id);
        $tags = $category->tags->map(function($tag) {
            return app()->getLocale() == "ar" ? $tag->name_ar : $tag->name_en;
        });
        return response()->json(["tags" => $tags,'category'=>$category]);
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
        $validatedData = $request->validated();

        // تحديث الصورة إذا تم رفع صورة جديدة
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $avatar = $request->file('image');
            $image = upload($avatar);
            $validatedData['image'] = $image;
        }

        // العثور على الفئة وتحديثها
        $category = Category::findOrFail($id);
        $category->update($validatedData);

        // تحديث العلامات المرتبطة
        $tags = $request->tags;

        // إنشاء مصفوفة لتخزين معرفات العلامات
        $tagIds = [];

        foreach (json_decode($tags[0]) as $key => $value) {
            $tag = Tag::where("name_ar", $value->value)->orWhere("name_en", $value->value)->first();
            if ($tag) {
                $tagIds[] = $tag->id;
            }
        }

        // مزامنة العلامات المرتبطة بالفئة
        $category->tags()->sync($tagIds);

        // استجابة JSON
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
            $category = Category::findOrFail($id);

            // Check if the category has an associated foreign key
            if ($category->foreign_key) {
                return response()->json(['error' => 'Category cannot be deleted because it is referenced by a foreign key.'], 400);
            }

            // Check and delete the category image from storage if exists
            if ($category->image && Storage::exists('images/' . $category->image)) {
                Storage::delete('images/' . $category->image);
            }

            $category->delete();
            return response()->json(['message' => 'Category deleted successfully.']);
        } catch (QueryException $e) {
            // Handle specific SQL error - foreign key constraint violation
            return response()->json(['error' => 'Category cannot be deleted because it is referenced by a foreign key in tags','status' => 400], 400);
        } catch (\Exception $e) {
            // Handle other exceptions
            return response()->json(['error' => 'Failed to delete category.'], 500);
        }
    }
}
