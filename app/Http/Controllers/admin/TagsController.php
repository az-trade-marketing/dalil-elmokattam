<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Imports\TagsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:tags Read');
    }

    public function index()
    {
        return view('admin.tags.index');
    }

    public function data()
    {
        $results = Tag::query()->orderByDesc("id")->get();

        $permissions = [
            'canCreate' => auth()->user()->can('tags Create'),
            'canDelete' => auth()->user()->can('tags Delete')
        ];
        return response()->json([
            'data' => $results,
            'permissions' => $permissions
        ]);
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new TagsImport, $file);
        return redirect()->back()->with('success', 'Tags imported successfully!');
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
            "name_ar" => "required|string|unique:tags,name_ar",
            "name_en" => "required|string|unique:tags,name_en",
        ]);
        try {
            Tag::create([
                "name_ar"       => $request->name_ar,
                "name_en"       => $request->name_en,
            ]);

            return response()->json(["message" => "success"], 200);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Tag::findOrFail($id);
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

    public function update(Request $request, $id)
    {
        $request->validate([
            "name_ar" => "required|string|unique:tags,name_ar," . $id,
            "name_en" => "required|string|unique:tags,name_en," . $id,
        ]);

        try {
            $permission = Tag::findOrFail($id);

            $permission->update([
                "name_ar"       => $request->name_ar,
                "name_en"       => $request->name_en,
            ]);

            return response()->json(["message" => "success"], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(["error" => "Permission not found"], 404);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }
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
            $permission = Tag::findOrFail($id);
            $permission->delete();
            return response()->json(["message" => "success"], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(["error" => "Permission not found"], 404);
        } catch (\Exception $e) {
            return response()->json(["error" => $e->getMessage()], 500);
        }
    }

}
