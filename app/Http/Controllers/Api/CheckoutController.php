<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddProductRequest;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Resources\GetCartResource;
use App\Http\Resources\GetMenuApiresource;
use App\Http\Resources\RentProductResource;
use App\Models\Checkout;
use App\Models\Item;
use App\Models\Menu;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(StoreCheckoutRequest $request)
    {
        try {
            $checkout = new Checkout();
            $products = Item::where('id',$request->item_id)->first();
            $checkout->fill($request->all());
            $checkout->user_id = auth()->user()->id;
            $checkout->seler_id = $products->user_id;
            $checkout->save();
            return response()->json($checkout, 200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function wishlist(StoreAddProductRequest $request)
    {
        try {
            $cart = new Wishlist();
            $cart->item_id = $request->item_id;
            $cart->user_id = auth()->user()->id;
            $cart->save();
            return response()->json(['message' => 'Item Add Successfully'], 200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function getWishlist()
    {
        try {
            $cart = Wishlist::with('products')->where('user_id', auth()->user()->id)->get();
            $data = GetCartResource::collection($cart);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function rent(){
        try {
            $cart = Checkout::with('products','products.users')->where('user_id', auth()->user()->id)->where('checkout_status',0)->get();
            $data = RentProductResource::collection($cart);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function buy(){
        try {
            $cart = Checkout::with('products','products.users')->where('user_id', auth()->user()->id)->where('checkout_status',1)->get();
            $data = RentProductResource::collection($cart);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function removeWishlist(Request $request){
        try {
            $cart = Wishlist::findOrFail($request->id);
            $cart->delete();
            return response()->json(['message' => 'Item remove from wishlist'], 200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function menu(){
        try {
            $menu = Menu::latest()->get();
            $data = GetMenuApiresource::collection($menu);
            return response()->json($data,200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
        // $emptyArr = [];
        // $newarr = [];
        // $arr = [1,2,3,4,5,6,7,10,23,12,3,19];
        // $chunkData = array_chunk($arr,10);
        //  $emptyArr[] = $chunkData[1];
        //  $emptyArr[] = $chunkData[0];
        //  foreach ($emptyArr as $key => $value) {
        //     foreach ($value as $val) {
        //         $newarr[] = $val;
        //     }
        //  }
        //  dd($newarr);
    }
}
