<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['item_id','user_id','days','type','rent_from','rent_to'];

    public function products(){
        return $this->belongsTo(Item::class,'item_id','id');
    }


    static function  cartValue($user_id){

            $total_carts = 0;
            $total_item = 0;
            $cart = Cart::with('products')->where('user_id', auth()->user()->id)->latest()->get()->map(function($cart) use(&$total_carts , &$total_item){
                $total_carts += $cart->products->rrp_price ?? 0;
                $total_item ++;
            });
    
    
            
            $data =  [
                "total_cart_amount" => $total_carts,
                'total_item' => $total_item,
                'sub_total_amount' => $total_carts,
                'coupon_code' => '',
                'discount_amount' => '',
                'discount_message' => '',
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
                    $data['total_cart_amount'] = "{$data['total_cart_amount']}";
                    $data['coupon_code'] = $coupons->code;
                    $data['discount_amount'] = "{$less_amount}";
                    $data['discount_message'] = $message;
                }

            }
            return $data;
        
    }
}
