<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApplyCouponRequest;
use App\Http\Requests\Api\CartCheckoutRequest;
use App\Http\Requests\StoreAddProductRequest;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Resources\Api\UserCartResource;
use App\Http\Resources\GetCartResource;
use App\Http\Resources\GetMenuApiresource;
use App\Http\Resources\GetProductResource;
use App\Http\Resources\RentProductResource;
use App\Models\ApplyDiscount;
use App\Models\BookingDate;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\City;
use App\Models\Country;
use App\Models\Discount;
use App\Models\Item;
use App\Models\Menu;
use App\Models\Wishlist;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CheckoutController extends Controller
{
    public function checkout(StoreCheckoutRequest $request)
    {
        try {
            DB::beginTransaction();
            foreach ($request->all() as $val) {
                foreach ($val['rental_period'] as $value) {
                    $bookingDates = BookingDate::where('item_id', $val['item_id'])->where('date', $value)->first();
                    
                    if ($bookingDates) {
                        DB::rollBack();
                        return response()->json(['date' => 'Item already booked on this date'], 200);
                    }
                }

                $checkout = new Checkout();
                $products = Item::where('id', $val['item_id'])->first();
                if ($val['checkout_status'] == 1) {
                    $products->checkout_status = '1';
                    $products->save();
                }
                if (!$products) {
                    DB::rollBack();
                    return response()->json(['error' => 'Item not found'], 404);
                }
                $checkout->fill($val);
                $checkout->user_id = auth()->user()->id;
                if ($products->user_id) {
                    $checkout->seller_id = $products->user_id;
                    $checkout->discount_code = $val['discount_code'];
                    $checkout->save();
                    $this->checkoutDates($val['rental_period'], $products->user_id, auth()->user()->id, $checkout->id, $val['item_id']);
                }else{
                    return response()->json(['error' => 'userid not found'], 404);
                }
                if ($val['is_cart'] == true) {
                    Cart::where('user_id',auth()->user()->id)->delete();
                }
        
            }
        DB::commit();

            return response()->json(['message' => 'checkout products successfully'], 200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            DB::rollBack();
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function wishlist(StoreAddProductRequest $request)
    {
        try {
            $checkCartItems = Wishlist::where('item_id',$request->item_id)->where('user_id',auth()->user()->id)->first();
            if ($checkCartItems) {
                return response()->json(['error' => ['item_id' => 'Item Already Addes In Wishlist']], 422);
            }
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
    public function rent()
    {
        try {
            $cart = Checkout::with('products', 'products.users','saler')->where('user_id', auth()->user()->id)->where('checkout_status', 0)->get();
            // dd($cart);
            $data = RentProductResource::collection($cart);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function buy()
    {
        try {
            $cart = Checkout::with('products', 'products.users')->where('user_id', auth()->user()->id)->where('checkout_status', 1)->get();
            $data = RentProductResource::collection($cart);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function removeWishlist(Request $request)
    {
        try {
            $cart = Wishlist::findOrFail($request->id);
            $cart->delete();
            return response()->json(['message' => 'Item remove from wishlist'], 200);
        } catch (\Throwable $th) {
            Log::error('api item post : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function menu()
    {
        try {
            $menu = Menu::latest()->get();
            $data = GetMenuApiresource::collection($menu);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            Log::error('api item post : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    protected function checkoutDates($dates, $sellerId, $userId, $id, $itemId)
    {
        foreach ($dates as $key => $value) {
            $checkoutDates = new BookingDate();
            $checkoutDates->date = $value;
            $checkoutDates->seller_id = $sellerId;
            $checkoutDates->user_id = $userId;
            $checkoutDates->checkout_id = $id;
            $checkoutDates->item_id = $itemId;
            $checkoutDates->save();
        }
    }



    function cartCheckout(CartCheckoutRequest $request){
        $apply_discount = ApplyDiscount::where('user_id',auth()->user()->id)->first();
        $carts = Cart::where('user_id',auth()->user()->id)->with('products')->get()->map(function($cart) use($request){
            $data = $request->validated();
            $data['item_id']  = $cart->item_id;
            $data['user_id']  = $cart->user_id;
            $data['checkout_status']  = 0;
            $data['size']  = $cart->products->size_id ?? 0 ;
            $data['product_price']  = $cart->products->rrp_price ?? 0;
            $data['shipping_address']  = $request->street_address;
            $data['payment_method']  = 1;
            $data['booking_date']  = date('Y-m-d');
            $data['seller_id']  = $cart->products->user_id ?? 0;
            Checkout::create($data);
            $cart->delete();
        });
        if(!empty($apply_discount)){
            $apply_discount->delete();
        }
        
    }

    function getUserCart(){
        $cart = Cart::with('products', 'products.color', 'products.size', 'products.users')->where('user_id', auth()->user()->id)->latest()->get();
        $cart_values = Cart::cartValue(auth()->user()->id);

        $user_cart = UserCartResource::collection($cart);


        $related_products = Item::where('status', Item::$active)->where('checkout_status', '0')->latest()->limit(6)->get();
        $related_products = GetProductResource::collection($related_products);

        $data = [
            'items' => $user_cart,
            'cart_values' => $cart_values,
            'related_products' => $related_products
        ];
        return response()->json($data, 200);
    }


    function applyCoupon(ApplyCouponRequest $request){
        $date  = date('Y-m-d');
        $coupons = Discount::where('code', $request->code)
        ->where('exp_date', '>=',$date)
        ->first();

        if(!empty($coupons)){
            ApplyDiscount::updateOrCreate(['user_id' => auth()->user()->id],['discount_id' => $coupons->id]);
            $values = Cart::cartValue(auth()->user()->id);
            return response()->json([
                'cart_values' => $values
            ]);
        }
        throw new HttpResponseException(
            response()->json([
                'errors' => [
                    'code' => ['Your discount code in expired']
                ]
            ], 422)
        );
    }

    function removeCoupon(){
        ApplyDiscount::where('user_id',auth()->user()->id)->delete();
        $values = Cart::cartValue(auth()->user()->id);
        return response()->json([
            'cart_values' => $values
        ]);
    }


}
