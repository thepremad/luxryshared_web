<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEditProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\Size;
use App\Models\SubCategory;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $products = Item::with('category', 'subCategory')->where('status', Item::$active)->when($query_search, function ($query) use ($query_search) {
                $query->where('category_id', 'like', '%' . $query_search . '%');
            })
                ->latest()->paginate(10);
            if ($request->ajax()) {
                return view('backend.products.pagination', compact('products'))->render();
            }
            return view('backend.products.index', compact('products'));
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEditProductRequest $request)
    {
        try {
            $item = Item::findOrFail($request->id);
            $item->fill($request->all());
            if ($file = $request->file('mainImag')) {
                $folder = public_path('/uploads/item');
                $item->mainImag = $this->uploadFile($file, $folder);
            }
            $item->save();
            if ($files = $request->file('image')) {
                $folder = public_path('/uploads/item');
                foreach ($files as $file) {
                    $item_image = new ItemImage();
                    $item_image->image = $this->uploadFile($file, $folder);
                    $item_image->item_id = $request->id;
                    $item_image->save();
                }
            }
            return response()->json(['status' => 200, 'message' => 'Product  Successfully created']);
        } catch (\Throwable $th) {
            Log::error('api item post : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $item = Item::with('itemImage','brand','color','size','category','subCategory')->findOrFail($id);
        return view('backend.products.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $products = Item::findOrFail($id);
        $category = Category::latest()->get();
        $sub_category = SubCategory::latest()->get();
        $size = Size::latest()->get();
        $color = Color::latest()->get();
        $brand = Brand::latest()->get();
        $item_images = ItemImage::where('item_id', $id)->get();
        return view('backend.products.create', compact('products', 'category', 'sub_category', 'size', 'item_images', 'color', 'brand'));
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
    public function destroy(string $id)
    {
        try {
            $categories = Item::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Product Successfully ']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
    public function productRequest(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $products = Item::with('category', 'subCategory', 'brand')->when($query_search, function ($query) use ($query_search) {
                $query->where('category_id', 'like', '%' . $query_search . '%');
            })
                ->latest()->paginate(10);
            if ($request->ajax()) {
                return view('backend.products.landing_pagination', compact('products'))->render();
            }
            return view('backend.products.landing', compact('products'));
        } catch (\Throwable $th) {
            \Log::error('Admin login error: ' . $th->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
    public function productApprove($id)
    {
        $item = Item::findOrFail($id);
        $item->status = Item::$active;
        $item->save();
        return response()->json(['status' => 200, 'message' => ' Product Approved Successfully ']);
    }
    public function productReject($id)
    {
        $item = Item::findOrFail($id);
        $item->status = Item::$inActive;
        $item->save();
        return response()->json(['status' => 200, 'message' => ' Product Reject Successfully ']);
    }
    public function removeImage($id)
    {
        try {
            $image = ItemImage::findOrFail($id)->delete();
            return response()->json(['status' => 200]);
        } catch (\Throwable $th) {
            \Log::error('Admin login error: ' . $th->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
}
