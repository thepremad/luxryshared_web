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
        $cart_values = $this->cartValue(auth()->user()->id);
        $countary = Country::orderBy('name','DESC')->get();
        return view('frontend.checkout_show',compact('menu','cart' ,'cart_values','cities','countary'));
    }


    function cartValue($user_id){
        $total_carts = 0;
        $total_item = 0;
        $cart = Cart::with('products')->where('user_id', auth()->user()->id)->latest()->get()->map(function($cart) use(&$total_carts , &$total_item){
            $total_carts += $cart->products->rrp_price ?? 0;
            $total_item ++;
        });


        
        $data =  [
            "total_cart_amount" => $total_carts,
            'total_item' => $total_item,
        ];

        $ApplyDiscount = ApplyDiscount::where('user_id',$user_id)->first();

        if ($ApplyDiscount) {
            $date  = date('Y-m-d');
            $coupons = Discount::where('id', $ApplyDiscount->discount_id)
            ->where('exp_date', '>=',$date)
            ->first();
            if(!empty($coupons)){

                $less_amount = 0;
                if($coupons->offer_type == 1){
                    $less_amount = $coupons->fix_amount;
                    $message = 'You get $discount% off on your purchase.';
                    $message = "You get AED {$less_amount} off on your purchase.";
                }elseif($coupons->offer_type == 2){
                    $amount = $data['total_cart_amount'];   // Original amount
                    $discount = $coupons->in_per;  // Discount percentage (50%)
                    $less_amount = ($amount * ($discount / 100));
                    $message = "You get {$discount}% off on your purchase.";
                }

                $data['total_cart_amount'] = $data['total_cart_amount'] - $less_amount;
                $data['total_cart_amount'] = "AED {$data['total_cart_amount']}";
                $data['coupon_code'] = $coupons->code;
                $data['discount_amount'] = "AED {$less_amount}";
                $data['discount_message'] = $message;
            }

            
        }

        return $data;
    }


    function applyCoupan(ApplyCouponRequest $request){
        $date  = date('Y-m-d');
        $coupons = Discount::where('code', $request->code)
        ->where('exp_date', '>=',$date)
        ->first();
        if(!empty($coupons)){
            ApplyDiscount::updateOrCreate(['user_id' => auth()->user()->id],['discount_id' => $coupons->id]);
            return $this->cartValue(auth()->user()->id);
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
