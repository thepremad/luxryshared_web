<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use App\Models\Item;
use App\Traits\FileUploadTrait;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $categories =Category::when($query_search, function ($query) use ($query_search) {
                $query->where('name', 'like', '%' . $query_search . '%');
            })
            ->latest()->paginate(10);
            if ($request->ajax()) {
                return view('backend.categories.pagination', compact('categories'))->render();
            }
            return view('backend.categories.index',compact('categories'));
        } catch (\Throwable $th) {
            \Log::error('Admin login error: ' . $th->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = new Category();
        return view('backend.categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
            $category = Category::firstOrNew(['id' => $request->id]);
            $category->fill($request->all());
            if ($request->status == '1') {
                $category->status = Category::$active;
            } else {
                $category->status = Category::$in_active;

            }
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/category');
                $category->image = $this->uploadFile($file, $folder);
            }
            $category->save();
            return response()->json(['status' => 200, 'message' => ' Category Create Successfully ']);
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
        $categories = Category::findOrFail($id);
        return view('backend.categories.create',compact('categories'));
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
            $categories = Category::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Category Successfully ']);
        } catch (\Exception $exception) {
            Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
    public function items(Request $request,$id){
      try {
        $query_search = $request->input('search');
        $items =Item::with('color')->where('category_id',$id)->when($query_search, function ($query) use ($query_search) {
            $query->where('item_title', 'like', '%' . $query_search . '%');
        })->latest()->paginate(10);
        if ($request->ajax()) {
            return view('backend.categories.pagination', compact('items'))->render();
        }
        return view('backend.categories.items',compact('items'));
    } catch (\Throwable $th) {
        \Log::error('Admin login error: ' . $th->getMessage());
        return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
    }
    }
}
