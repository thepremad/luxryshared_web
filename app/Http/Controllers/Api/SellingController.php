<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContuctUsRequest;
use App\Http\Resources\LendingProductApiResource;
use App\Http\Resources\SellingResource;
use App\Http\Resources\StoreBlogResourceApi;
use App\Models\Blog;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\City;
use App\Models\ContuctUs;
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
        $discounts = Discount::with('discountProduct')->where('code', $request->discount_code)->first();
        if ($discounts) {
            $discountProductIds = $discounts->discountProduct->pluck('product_id')->toArray();
            $totalRrpPrice = Cart::with('products')->where('user_id', auth()->user()->id)->whereHas('products', function ($query) use ($discounts,$discountProductIds){
                $query->where('category_id',$discounts->category_id)->whereIn('id',$discountProductIds);
                })->get();

                $data =  $this->daysPrice($totalRrpPrice,$discounts);
            return response()->json(['totalPayment' =>$data],200);
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
            return response()->json(['privacy_policy' => $privacyPolicy, 'terms_and_conditions' => $termsAndCondition],200);
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
        return response()->json(['message' => 'success'],200);
     } catch (\Throwable $th) {
        \Log::error('api item post : exception');
        \Log::error($th);
        return response()->json(['error' => "Something went wrong. Please try again later."], 500);
    } 
}
protected function daysPrice($data, $discount)
{
    $allProductPrices = []; 
    $totalPrice = 0;
    
    foreach ($data as $value) {
        $price = 0;
    
        if ($value->days >= 4 && $value->days <= 6) {
            $price = $value->products->fourDaysPrice;
        } elseif ($value->days >= 7 && $value->days <= 29) {
            $price = $value->products->sevenToTwentyNineDayPrice;
        } elseif ($value->days >= 30) {
            $price = $value->products->thirtyPlusDayPrice;
        } else {
            $price = (float)$value->days * (float)$value->products->suggested_day_price;
        }
    
        if ($discount->offer_type == '2') {
            $finalPrice = ($price * $discount->in_per) / 100;
            $amount = $price - $finalPrice;
        } elseif ($discount->offer_type == '1') {
            $amount = $price - $discount->fix_amount;
        }

        $amount = $amount < 0 ? 0 : $amount;
        
        $allProductPrices[] = [
            'item_id' => $value->products->id,
            'amount' => $amount,
        ];
        $totalPrice += $amount;
    }
    return[
        'total_price' => $totalPrice,
        'product_prices' => $allProductPrices,
    ];
}
public function withdrawlRequest(Request $request){
    try {
        $checkout = Checkout::where('seller_id',auth()->user()->id)->where('item_id',$request->item_id)->first();
        if ($checkout) {
            $checkout->withdrawl_request = Checkout::$requested;
            $checkout->save();
            return response()->json(['message' => 'withdrawl request send successfully'],200);
        }else{
            return response()->json(['message' => 'Id not match with records'],200);
        }
    }  catch (\Throwable $th) {
        \Log::error('api item post : exception');
        \Log::error($th);
        return response()->json(['error' => "Something went wrong. Please try again later."], 500);
    } 
}
public function contuctUs(ContuctUsRequest $request){
    try {
        $contuctUs = new ContuctUs();
        $contuctUs->fill($request->all());
        $contuctUs->save();
        return response()->json(['message' => 'form submit successfully'],200);
    } catch (\Throwable $th) {
        \Log::error('api item post : exception');
        \Log::error($th);
        return response()->json(['error' => "Something went wrong. Please try again later."], 500);
    } 
}
    
}
