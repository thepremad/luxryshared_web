<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddProductRequest;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Resources\GetCartResource;
use App\Http\Resources\GetMenuApiresource;
use App\Http\Resources\RentProductResource;
use App\Models\BookingDate;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Item;
use App\Models\Menu;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            \Log::error('api item post : exception');
            \Log::error($th);
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
            \Log::error('api item post : exception');
            \Log::error($th);
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
}
