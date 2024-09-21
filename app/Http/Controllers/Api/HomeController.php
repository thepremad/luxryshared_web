<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandproductrequest;
use App\Http\Requests\StoreOccasionproductrequest;
use App\Http\Resources\BrandResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\GetProductResource;
use App\Http\Resources\GetTheLookResource;
use App\Http\Resources\HomeApiResource;
use App\Http\Resources\OccasionResource;
use App\Http\Resources\StoreBlogResourceApi;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;
use App\Models\Look;
use App\Models\Occasion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
         $categories = Category::with('products','products.bookingDate')->latest()->get();
         $data = HomeApiResource::collection($categories);
         $cateegory = Category::where('status',Category::$active)->latest()->get();
        $categorydata = CategoryResource::collection($cateegory);
        $occasions = Occasion::latest()->take(6)->get();
        $occassionData = OccasionResource::collection($occasions);
        $item = Item::with('bookingDate')->where('status',Item::$active)->where('checkout_status','0')->latest()->take(6)->get();
        $productJustLanded = GetProductResource::collection($item);
        $look = GetTheLookResource::collection(Look::with('products','products.bookingDate')->latest()->get());
        $brand = Brand::latest()->take(6)->get();
        $privacyPolicy = Blog::latest()->take(6)->get();
        $blogData = StoreBlogResourceApi::collection($privacyPolicy);
         return response()->json(['category' => $categorydata, 'occassion' => $occassionData,"just_landed" => $productJustLanded,'get_the_look' => $look,'brands' => BrandResource::collection($brand),'category_product' => $data,'comunity' =>$blogData],200);
    }
    public function brandProduct(StoreBrandproductrequest $request){
     $item = Item::where('brand_id',$request->id)->get();
     $data = GetProductResource::collection($item);
     return response()->json($data,200);

    }
    public function occasionProduct(StoreOccasionproductrequest $request){
        $item = Item::where('occasion_id',$request->id)->get();
     $data = GetProductResource::collection($item);
     return response()->json($data,200);
    }
}
