<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBrandproductrequest;
use App\Http\Requests\StoreOccasionproductrequest;
use App\Http\Resources\GetProductResource;
use App\Http\Resources\HomeApiResource;
use App\Models\Category;
use App\Models\Item;
use App\Models\Occasion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
         $categories = Category::with('products')->latest()->get();
         $data = HomeApiResource::collection($categories);
         return response()->json($data,200);
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
