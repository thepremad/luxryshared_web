<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWebItem;
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
use App\Models\PrivacyPolicy;
use App\Models\TermsAndConditions;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    use FileUploadTrait;
    public function home()
    {
        $categories = Category::with('products', 'products.bookingDate')->latest()->get();
        $data = HomeApiResource::collection($categories);
        $cateegory = Category::latest()->get();
        $categorydata = CategoryResource::collection($cateegory);
        $occasions = Occasion::latest()->take(6)->get();
        $occassionData = OccasionResource::collection($occasions);
        $item = Item::with('bookingDate')->where('status', Item::$active)->where('checkout_status', '0')->latest()->take(6)->get();
        $productJustLanded = GetProductResource::collection($item);
        $look = GetTheLookResource::collection(Look::with('products', 'products.bookingDate')->latest()->get());
        $brand = Brand::latest()->take(6)->get();
        $privacyPolicy = Blog::latest()->take(6)->get();
        $blogData = StoreBlogResourceApi::collection($privacyPolicy);
        $allData = ['category' => $categorydata, 'occassion' => $occassionData, "just_landed" => $productJustLanded, 'get_the_look' => $look, 'brands' => BrandResource::collection($brand), 'category_product' => $data, 'comunity' => $blogData];
        //    dd($allData);
        $menu = Menu::latest()->get();
        return view('frontend.index', compact('allData', 'menu'));
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function aboutUs()
    {
        $menu = Menu::latest()->get();
        return view('frontend.about-us', compact('menu'));
    }
    public function faq()
    {
        $menu = Menu::latest()->get();
        return view('frontend.faq', compact('menu'));
    }
    public function privacyPolicy()
    {
        $menu = Menu::latest()->get();
        $privacyPolicy = PrivacyPolicy::first();
        return view('frontend.privacy-policy', compact('menu', 'privacyPolicy'));
    }
    public function termsAndConditions()
    {
        $menu = Menu::latest()->get();
        $terms = TermsAndConditions::first();
        return view('frontend.tandcs', compact('menu', 'terms'));
    }
    public function saveItem(StoreWebItem $request)
    {
        try {
            $item = new Item();
            $item->fill($request->all());
            if ($file = $request->file('mainImag')) {
                $folder = public_path('/uploads/item');
                $item->mainImag = $this->uploadFile($file, $folder);
            }
            $item->user_id = auth()->user()->id;
            $item->save();
            return redirect()->route('home');

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
