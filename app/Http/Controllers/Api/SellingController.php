<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LendingProductApiResource;
use App\Http\Resources\SellingResource;
use App\Http\Resources\StoreBlogResourceApi;
use App\Models\Blog;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\City;
use App\Models\Country;
use App\Models\Discount;
use App\Models\Item;
use App\Models\PrivacyPolicy;
use App\Models\TermsAndConditions;
use App\Models\User;
use Illuminate\Http\Request;

class SellingController extends Controller
{
    public function selling(){
        try {
            $item = Checkout::with('products','products.users')->where('seller_id',auth()->user()->id)->get();
            $data = SellingResource::collection($item);
            return response()->json($data,200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function lending(){
        try {
            $date = date('d-m-Y');

            $item = Checkout::with(['products', 'products.users', 'user', 'bookingdate'])
                ->where('seller_id', auth()->user()->id)
                ->whereHas('bookingdate', function ($query) use ($date) {
                    $query->where('date', '=', $date); // Ensure 'date' is the correct column in the 'bookingdate' relation
                })->get();
            $data = LendingProductApiResource::collection($item);
            return response()->json($data,200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        } 
    }
    public function discountCode(Request $request){
      try {
        $discounts = Discount::where('code', $request->discount_code)->first();

        if ($discounts) {
            $totalRrpPrice = Cart::where('user_id', auth()->user()->id)->with('products')->get()->sum(function ($cart) {
                    return $cart->products->sum('rrp_price');
                });
            return response()->json(['totalPayment' =>$totalRrpPrice],200);
        }else{
            return response()->json(['message' => 'discount code not match'],200);
        }
        
      } catch (\Throwable $th) {
        \Log::error('api item post : exception');
        \Log::error($th);
        return response()->json(['error' => "Something went wrong. Please try again later."], 500);
    } 
    }
    public function privacyPolicy(){
        try {
            $privacyPolicy = PrivacyPolicy::first();
            $termsAndCondition = TermsAndConditions::first();
            return response()->json(['privacy_policy' => $privacyPolicy, 'terms_and-conditions' => $termsAndCondition],200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        } 
    }
    public function comunity(){
        try {
            $privacyPolicy = Blog::latest()->take(6)->get();
            $data = StoreBlogResourceApi::collection($privacyPolicy);
            return response()->json( $data,200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        } 
    }
    public function city(){
        try {
            $privacyPolicy = City::latest()->get();
            return response()->json( $privacyPolicy,200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        } 
        
    }
    public function country(){
        try {
            $privacyPolicy = Country::latest()->get();
            return response()->json( $privacyPolicy,200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        } 
    
}
public function shoppingBagPayment(Request $request){
     try {
        $data = collect($request->products);
        $wakoo = $data->map(function($product) use ($request) {
            $item = Item::find($product['product_id']);
            $item->quantity = $product->quantity;
            $item->coupan_code = $request->discount_code;
            $item->save();
        });
     } catch (\Throwable $th) {
        \Log::error('api item post : exception');
        \Log::error($th);
        return response()->json(['error' => "Something went wrong. Please try again later."], 500);
    } 
}
}
