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
use App\Models\User;
use Illuminate\Http\Request;

class ProductListController extends Controller
{


  public function index(Request $request)
  {

    $scid = $request->input('subcategory');
    $cid = $request->input('color');
    $sid = $request->input('size');
    $oid = $request->input('occasion');
    $bid = $request->input('brand');
    $nid = $request->input('near');
    $nid_array = [];
    // dd($nid);
    if ($nid) {
      $user = User::findOrFail(auth()->user()->id);
      $lan = $user->latitude;
      $lon = $user->longitude;
      $distance = 25;

      $userData = User::where('id', '!=', auth()->user()->id)
        ->selectRaw("*, ( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance", [$lan, $lon, $lan])
        ->having('distance', '<', $distance)
        ->orderBy('distance')
        ->get();

      foreach ($userData as $val) {
        $nid_array[] = $val->id;
      }
    }
    
    //     $languages = $request->input('languages');
    //     $search = $request->input('search');

    $items = Item::where('status', Item::$active)
      ->where('checkout_status', '0')
      ->when($scid, function ($query) use ($scid) {
        $query->whereHas('subCategory', function ($query_2) use ($scid) {
          $query_2->whereIn('id', $scid);
        });
      })
      ->when($cid, function ($query) use ($cid) {
        $query->whereHas('color', function ($query_2) use ($cid) {
          $query_2->whereIn('id', $cid);
        });
      })
      ->when($sid, function ($query) use ($sid) {
        $query->whereHas('size', function ($query_2) use ($sid) {
          $query_2->whereIn('id', $sid);
        });
      })
      ->when($oid, function ($query) use ($oid) {
        $query->whereHas('occasion', function ($query_2) use ($oid) {
          $query_2->whereIn('id', $oid);
        });
      })
      ->when($bid, function ($query) use ($bid) {
        $query->whereHas('brand', function ($query_2) use ($bid) {
          $query_2->whereIn('id', $bid);
        });
      })
      ->when($nid_array, function ($query) use ($nid_array) {
        $query->whereIn('user_id', $nid_array);
        })
     
      ->latest()
      ->get();

    $categories = Category::with('subCategory', 'subCategory.item', 'subCategory.item.itemBrand')->where('status', 1)->latest()->get();
    $item = [];
    foreach ($categories as $val) {
      foreach ($val->subCategory as $val) {
        foreach ($val->item as $val) {
          if ($val->itemBrand != null) {
            foreach ($items as $single_item) {
              if ($single_item->id == $val->id) {
                $item[] = $single_item;
              }
            }
          }
        }
      }
    }
    // dd($item);   
    if ($request->ajax()) {
      return view('frontend.product-list-filter', compact('item'))
        ->render();
    }
  }

  public function categories($id)
  {
    $categories = Category::with('subCategory', 'subCategory.item', 'subCategory.item.itemBrand')->where('status', 1)->latest()->get();

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
          foreach ($val->item as $val) {
            if ($val->itemBrand != null) {
              foreach ($items as $single_item) {
                if ($single_item->id == $val->id) {
                  $item[] = $single_item;
                }
              }
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

  public function color($id)
  {
    $categories = Category::with('subCategory', 'subCategory.item')->where('status', 1)->latest()->get();
    $occasions = Occasion::where('status', 1)->latest()->get();
    $brand = Brand::where('status', 1)->latest()->get();
    $color = Color::latest()->get();
    $size = Size::latest()->get();
    $menu = Menu::latest()->get();
    $items = Item::where('color_id', $id)->where('status', Item::$active)->where('checkout_status', '0')->latest()->get();
    $item = [];

    foreach ($color as $val) {
      foreach ($items as $single_item) {
        if ($single_item->color_id == $val->id) {
          $item[] = $single_item;
        }

      }
    }
    return view('frontend.product-list', compact('item', 'menu', 'categories', 'occasions', 'color', 'size', 'brand'));

  }


  public function size($id)
  {
    $categories = Category::with('subCategory', 'subCategory.item')->where('status', 1)->latest()->get();
    $occasions = Occasion::where('status', 1)->latest()->get();
    $brand = Brand::where('status', 1)->latest()->get();
    $color = Color::latest()->get();
    $size = Size::latest()->get();
    $menu = Menu::latest()->get();
    $items = Item::where('size_id', $id)->where('status', Item::$active)->where('checkout_status', '0')->latest()->get();
    $item = [];
    foreach ($size as $val) {
      foreach ($items as $single_item) {
        if ($single_item->size_id == $val->id) {
          $item[] = $single_item;
        }

      }
    }
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