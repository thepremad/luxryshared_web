<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Menu;
use App\Models\Size;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function listItem(){
        $menu = Menu::latest()->get();
        $category = Category::latest()->get();
        $subCategory = SubCategory::latest()->get();
        $brand = Brand::latest()->get();
        $color = Color::latest()->get();
        $size = Size::latest()->get();
        return view('frontend.list-item',compact('menu','category','subCategory','brand','color','size'));
    }
}
