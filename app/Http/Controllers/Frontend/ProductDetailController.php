<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWebCheckoutStore;
use App\Models\BookingDate;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Discount;
use App\Models\Item;
use App\Models\Menu;
use App\Models\Size;
use App\Models\Wishlist;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function cart()
    {
        $menu = Menu::latest()->get();
        $cart = Cart::with('products', 'products.color', 'products.size', 'products.users')->where('user_id', auth()->user()->id)->latest()->get();
        return view('frontend.cart', compact('menu', 'cart'));
    }
    public function applyDiscount($coupan)
    {
        $discounts = Discount::with('discountProduct')->where('code', $coupan->id)->first();
        if ($discounts) {
            $discountProductIds = $discounts->discountProduct->pluck('product_id')->toArray();
            $totalRrpPrice = Cart::with('products')->where('user_id', auth()->user()->id)->whereHas('products', function ($query) use ($discounts, $discountProductIds) {
                $query->where('category_id', $discounts->category_id)->whereIn('id', $discountProductIds);
            })->get();
            $data = $this->daysPrice($totalRrpPrice, $discounts);

        } else {
            return redirect()->back();
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
                $price = (float) $value->days * (float) $value->products->suggested_day_price;
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
        return [
            'total_price' => $totalPrice,
            'product_prices' => $allProductPrices,
        ];
    }
    public function checkout($size,$itemId,$rentDay,$method)
    {
        $menu = Menu::latest()->get();
        return view('frontend.checkout', compact('menu','size','itemId','rentDay','method'));
    }
    public function removeItem($id)
    {
        $item = Cart::find($id)->delete();
        return redirect()->back();
    }
    public function saveCheckout(StoreWebCheckoutStore $request)
    {
        try {
            // dd($request->all());
            DB::beginTransaction();
            $count = count($request->rental_period);
            $products = Item::where('id', $request->item_id)->first();
            foreach ($request->rental_period as $value) {
                $bookingDates = BookingDate::where('item_id', $request->item_id)->where('date', $value)->first();
                
                if ($bookingDates) {
                    DB::rollBack();
                    return response()->json(['date' => 'Item already booked on this date'], 200);
                }
            }
            $checkout = new Checkout();
            $day_price = Item::where('rrp_price',$request->price)->sum('suggested_day_price');
            if ($count <= '1') {
                $dayPrice = ($products->rrp_price*3)/100;
            }else{
                $dayPrice = $day_price/$count;
            }
            $checkout->product_price = $dayPrice;
            $checkout->shipping_address = $request->street_address;
            $checkout->payment_method = 1;
            $checkout->seller_id = $products->user_id;
            $checkout->user_id = auth()->user()->id;
            $checkout->booking_date = Carbon::now();
            $checkout->fill($request->all());
            $checkout->save();
            DB::commit();
            return redirect()->route('checkout_success');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
    public function wishlist()
    {
        
        $menu = Menu::latest()->get();
        $wishlist = Wishlist::with('products')->where('user_id', auth()->user()->id)->latest()->get();
        return view('frontend.wishlist', compact('menu', 'wishlist'));
    }
    public function addToCart($id)
    {
        $cart = new Cart();
        $match = Cart::where('item_id',$id)->first();
        if ($match) {
            return redirect()->back();
        }
        $cart->item_id = $id;
        $cart->user_id = auth()->user()->id;
        $cart->save();
        return redirect()->back();
    }
    public function removeWishlist($id){
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();
        return redirect()->back();
    }
    public function productDetail($id){
        $menu = Menu::latest()->get();
        $item = Item::with('itemImage','users','size')->find($id);
        $size = Size::latest()->get();
        // $size = Size::latest()->get();


        // return $item;

        $related_products = Item::where('category_id',$item->category_id)->whereNot('id',$id)->where('status',1)->limit(4)->get();

        // return $related_products;

        return view('frontend.product-details',compact('menu','item','size','related_products'));
    }
}
