<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWebItem;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\Menu;
use App\Models\Occasion;
use App\Models\Size;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function listItem(){
        $menu = Menu::latest()->get();
        $category = Category::orderBy('name','ASC')->get();
        $subCategory = SubCategory::orderBy('name','ASC')->get();
        $brand = Brand::orderBy('name','ASC')->get();
        $color = Color::orderBy('name','ASC')->get();
        $size = Size::orderBy('name','ASC')->get();
        $occasions = Occasion::where('status',1)->orderBy('name','ASC')->get();
        return view('frontend.list-item',compact('menu','category','subCategory','brand','color','size','occasions'));
    }

    public function saveItem(StoreWebItem $request)
    {

        try {

            if($request->step == 2){

                $item = new Item();

                $item->fill($request->all());
                if ($request->hasFile('mainImag')) {
                    $pic = $request->mainImag->getClientOriginalName();
                    $folder = public_path('/uploads/item');
                    $request->file('mainImag')->move($folder, $pic);
                    $item->mainImag = $pic;
                }
                $item->user_id = auth()->user()->id;
                $item->save();

                if ($request->hasFile('images')) {

                    foreach ($request->file('images') as $image) {
                        $item_images = new ItemImage();
                        $pic = $image->getClientOriginalName();
                        $folder = public_path('/uploads/item');
                        $image->move($folder, $pic);
                        $item_images->image = $pic;
                        $item_images->item_id = $item->id;
                        $item_images->save();
                    }
                }
                // session()->flash('success','Item added successfully');
                return route('home');

            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
