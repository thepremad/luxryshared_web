<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Item;
use App\Models\Menu;
use App\Models\Occasion;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
  public function categories($id)
  {
    $categories = Category::with('subCategory', 'subCategory.item')->where('status', 1)->latest()->get();
    $occasions = Occasion::where('status', 1)->latest()->get();
    $brand = Brand::where('status', 1)->latest()->get();
    $color = Color::latest()->get();
    $size = Size::latest()->get();
    $menu = Menu::latest()->get();
    if ($id == 0) {

      $items = Item::where('status', Item::$active)->where('checkout_status', '0')->latest()->get();
      $item = [];
      foreach ($categories as $val) {
        foreach ($val->subCategory as $val) {
          foreach ($items as $single_item) {
            if ($single_item->sub_category_id == $val->id) {
              $item[] = $single_item;
            }

          }
        }
      }
      return view('frontend.product-list', compact('item', 'menu', 'categories', 'occasions', 'color', 'size', 'brand'));
    }
    ;
    $item = Item::where('sub_category_id', $id)->where('status', Item::$active)->where('checkout_status', '0')->latest()->get();
    return view('frontend.product-list', compact('item', 'menu', 'categories', 'occasions', 'color', 'size', 'brand'));

  }

  public function ocassions($id)
  {
    $categories = Category::with('subCategory', 'subCategory.item')->where('status', 1)->latest()->get();
    $occasions = Occasion::where('status', 1)->latest()->get();
    $brand = Brand::where('status', 1)->latest()->get();
    $color = Color::latest()->get();
    $size = Size::latest()->get();
    $menu = Menu::latest()->get();
    if ($id == 0) {
      $items = Item::where('status', Item::$active)->where('checkout_status', '0')->latest()->get();
      $item = [];
      foreach ($occasions as $val) {
        foreach ($items as $single_item) {
          if ($single_item->occasion_id == $val->id) {
            $item[] = $single_item;
          }
        }

      }
      return view('frontend.product-list', compact('item', 'menu', 'categories', 'occasions', 'color', 'size', 'brand'));
    }
    ;
    $item = Item::where('occasion_id', $id)->where('status', Item::$active)->where('checkout_status', '0')->latest()->get();
    return view('frontend.product-list', compact('item', 'menu', 'categories', 'occasions', 'color', 'size', 'brand'));
  }

  public function category($id)
  {
    $categories = Category::with('subCategory', 'subCategory.item')->where('status', 1)->latest()->get();
    $occasions = Occasion::where('status', 1)->latest()->get();
    $brand = Brand::where('status', 1)->latest()->get();
    $color = Color::latest()->get();
    $size = Size::latest()->get();
    $menu = Menu::latest()->get();
    $items = Item::where('category_id', $id)->where('status', Item::$active)->where('checkout_status', '0')->latest()->get();
    $item = [];
    foreach ($categories as $val) {
      foreach ($brand as $val) {
        foreach ($items as $single_item) {
          if ($single_item->sub_category_id == $val->id) {
            $item[] = $single_item;
          }

        }
      }
    }
    return view('frontend.product-list', compact('item', 'menu', 'categories', 'occasions', 'color', 'size', 'brand'));

  }

  public function topBrands($id)
  {
    $categories = Category::with('subCategory', 'subCategory.item')->where('status', 1)->latest()->get();
    $occasions = Occasion::where('status', 1)->latest()->get();
    $brand = Brand::where('status', 1)->latest()->get();
    $color = Color::latest()->get();
    $size = Size::latest()->get();
    $menu = Menu::latest()->get();
    if ($id == 0) {
      $items = Item::where('status', Item::$active)->where('checkout_status', '0')->latest()->get();
      $item = [];
      foreach ($brand as $val) {
        foreach ($items as $single_item) {
          if ($single_item->brand_id == $val->id) {
            $item[] = $single_item;
          }
        }

      }
      return view('frontend.product-list', compact('item', 'menu', 'categories', 'occasions', 'color', 'size', 'brand'));
    }
    ;
    $item = Item::where('brand_id', $id)->where('status', Item::$active)->where('checkout_status', '0')->latest()->get();
    return view('frontend.product-list', compact('item', 'menu', 'categories', 'occasions', 'color', 'size', 'brand'));

  }

  public function getTheLook($id)
  {
    if ($id == 0) {
      $data = Item::latest()->get();
    }
    ;
  }
}
