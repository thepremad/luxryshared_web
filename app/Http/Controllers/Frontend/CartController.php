<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ApplyCouponRequest;
use App\Models\ApplyDiscount;
use App\Models\Cart;
use App\Models\City;
use App\Models\Country;
use App\Models\Discount;
use App\Models\Menu;
use App\Traits\ApiResponse;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;

class CartController extends Controller
{
    use ApiResponse;
    function checkout (){
        $cities = City::orderBy('name','DESC')->get();
        $menu = Menu::latest()->get();
        $cart = Cart::with('products', 'products.color', 'products.size', 'products.users')->where('user_id', auth()->user()->id)->latest()->get();
        $cart_values = Cart::cartValue(auth()->user()->id);
        $countary = Country::orderBy('name','DESC')->get();
        return view('frontend.checkout_show',compact('menu','cart' ,'cart_values','cities','countary'));
    }


    function getUserCart(){
        
    }

    function removeCoupan(){
        ApplyDiscount::where('user_id',auth()->user()->id)->delete();
        return Cart::cartValue(auth()->user()->id);
    }

    function applyCoupan(ApplyCouponRequest $request){
        $date  = date('Y-m-d');
        $coupons = Discount::where('code', $request->code)
        ->where('exp_date', '>=',$date)
        ->first();
        if(!empty($coupons)){
            ApplyDiscount::updateOrCreate(['user_id' => auth()->user()->id],['discount_id' => $coupons->id]);
            return Cart::cartValue(auth()->user()->id);
        }
        throw new HttpResponseException(
            response()->json([
                'errors' => [
                    'code' => ['Your discount code in expired']
                ]
            ], 422)
        );
    }

    
}
