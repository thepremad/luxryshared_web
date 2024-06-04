<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubCategoryRequest;
use App\Models\Category;
use App\Models\SubCategory;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class SubCategoryController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub_categories = SubCategory::with('cateogry')->latest()->paginate(10);
        foreach ($sub_categories as $key => $value) {
            $value->date = Carbon::parse($value->created_at)->format('d-m-y');
        }
        return view('backend.sub-categories.index', compact('sub_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sub_categories = new SubCategory();
        $categories = Category::latest()->get();
        return view('backend.sub-categories.create',compact('sub_categories','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubCategoryRequest $request)
    {
        try {
            $category = SubCategory::firstOrNew(['id' => $request->id]);
            $category->fill($request->all());
            if ($request->status == '1') {
                $category->status = SubCategory::$active;
            } else {
                $category->status = SubCategory::$in_active;
            }
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/subcategory');
                $category->image = $this->uploadFile($file, $folder);
            }
            $category->save();
            return response()->json(['status' => 200, 'message' => ' SubCategory Create Successfully ']);
        } catch (\Exception $exception) {
            Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::latest()->get();
        $sub_categories = SubCategory::findOrFail($id);
        return view('backend.sub-categories.create',compact('sub_categories','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $categories = SubCategory::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete SubCategory Successfully login!']);
        } catch (\Exception $exception) {
            Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
}
