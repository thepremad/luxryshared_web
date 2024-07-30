<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddProductRequest;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Resources\GetCartResource;
use App\Http\Resources\RentProductResource;
use App\Models\Checkout;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(StoreCheckoutRequest $request)
    {
        try {
            $checkout = new Checkout();
            $checkout->fill($request->all());
            $checkout->user_id = auth()->user()->id;
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
}
