<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_id',
        'user_id',
        'first_name',
        'last_name',
        'country',
        'street_address',
        'arp_suit_unit',
        'city',
        'state',
        'mobile_number',
        'checkout_status',
        'size',
        'product_price',
        'shipping_address',
        'payment_method',
        'card_no',
        'cvv',
        'exp_date',
        'card_holder_name',
        'booking_date',

    ];

    public function products(){
        return $this->belongsTo(Item::class,'item_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function bookingdate(){
        return $this->hasMany(BookingDate::class,'checkout_id','id');
    }

    public function city(){
      return $this->belongsTo(City::class,'city','id');
    }
    public function saler(){
        return $this->belongsTo(User::class,'seller_id','id');
    }
    static $requested = 1;
    static $approved = 2;
    static $pending = 0;
}
