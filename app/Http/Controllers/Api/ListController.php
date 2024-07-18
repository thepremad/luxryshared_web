<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSugestedPriceRequest;
use App\Http\Resources\BrandResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ColorResource;
use App\Http\Resources\GetProductResource;
use App\Http\Resources\OccasionResource;
use App\Http\Resources\SizeResource;
use App\Http\Resources\SubCategoryResource;
use App\Http\Resources\SugestedDayPrice;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Item;
use App\Models\Occasion;
use App\Models\Size;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ListController extends Controller
{
    public function category()
    {
        try {
            $category = Category::where('status', Category::$active)->latest()->get();
            $data = CategoryResource::collection($category);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            Log::error('api category get : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function subCategory($id)
    {
        try {
            $subCategory = SubCategory::where('category_id', $id)->where('status', SubCategory::$active)->latest()->get();
            $data = SubCategoryResource::collection($subCategory);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            Log::error('api subCategory get : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function brand()
    {
        try {
            $brand = Brand::where('status', Brand::$active)->latest()->get();
            $data = BrandResource::collection($brand);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            Log::error('api brand get : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function size()
    {
        try {
            $size = Size::latest()->get();
            $data = SizeResource::collection($size);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            Log::error('api brand get : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function color()
    {
        try {
            $color = Color::latest()->get();
            $data = ColorResource::collection($color);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            Log::error('api brand get : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function suggestedDayPrice(StoreSugestedPriceRequest $request)
    {
        try {
            $data = new SugestedDayPrice($request->price);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            Log::error('api brand get : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function occasion(Request $request)
    {
        try {
            if ($request->occasionId == '0') {
                $products = Item::where('status',Item::$active)->latest()->get();
            }else{
                $products = Item::where('occasion_id',$request->occasionId)->where('status',Item::$active)->get();
            }
            $data = GetProductResource::collection($products);
            return response()->json($data, 200);
           }catch (\Throwable $th) {
            Log::error('api item post : exception');
            Log::error($th);
            return response()->json(['error'=> "Something went wrong. Please try again later."],500);
        }
    }
}
