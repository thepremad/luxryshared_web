<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddProductRequest;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Resources\GetCartResource;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(StoreCheckoutRequest $request){

    }
    public function wishlist(StoreAddProductRequest $request){
        try {
            $cart = new Wishlist();
            $cart->item_id = $request->item_id;
            $cart->user_id = auth()->user()->id;
            $cart->save();
            return response()->json(['message' => 'Item Add Successfully'], 200);
        }catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error'=> "Something went wrong. Please try again later."],500);
        }
    }
    public function getWishlist(){
        try {
            $cart = Wishlist::with('products')->where('user_id',auth()->user()->id)->get();
            $data = GetCartResource::collection($cart);
            return response()->json($data,200);
        }catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error'=> "Something went wrong. Please try again later."],500);
        }
    }
}
