<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\City;
use App\Models\Country;
use App\Models\Menu;
use Illuminate\Http\Request;

class CartController extends Controller
{
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

        return [
            "total_cart_amount" => $total_carts,
            'total_item' => $total_item,
        ];
    }

    
}
