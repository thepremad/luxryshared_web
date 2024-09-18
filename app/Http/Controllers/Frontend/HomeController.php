<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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
use App\Models\Menu;
use App\Models\Occasion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $categories = Category::with('products','products.bookingDate')->latest()->get();
        $data = HomeApiResource::collection($categories);
        $cateegory = Category::latest()->get();
       $categorydata = CategoryResource::collection($cateegory);
       $occasions = Occasion::latest()->take(6)->get();
       $occassionData = OccasionResource::collection($occasions);
       $item = Item::with('bookingDate')->where('status',Item::$active)->where('checkout_status','0')->latest()->take(6)->get();
       $productJustLanded = GetProductResource::collection($item);
       $look = GetTheLookResource::collection(Look::with('products','products.bookingDate')->latest()->get());
       $brand = Brand::latest()->take(6)->get();
       $privacyPolicy = Blog::latest()->take(6)->get();
       $blogData = StoreBlogResourceApi::collection($privacyPolicy);
       $allData = ['category' => $categorydata, 'occassion' => $occassionData,"just_landed" => $productJustLanded,'get_the_look' => $look,'brands' => BrandResource::collection($brand),'category_product' => $data,'comunity' =>$blogData];
    //    dd($allData);
    $menu = Menu::latest()->get();
        return view('frontend.index',compact('allData','menu'));
    }
}
