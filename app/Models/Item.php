<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'sub_category_id',
        'brand_id',
        'item_title',
        'color_id',
        'size_id',
        'mainImag',
        'image_description',
        'rrp_price',
        'suggested_day_price',
        'sucurity_deposit',
        'fourDaysPrice',
        'sevenToTwentyNineDayPrice',
        'thirtyPlusDayPrice',
        'buy',
        'buy_price',
    ];
    public function color(){
       return $this->hasOne(Color::class,'id','color_id');
    }
    public function category(){
        return $this->hasOne(Category::class,'id','category_id');
     }
     public function subCategory(){
        return $this->hasOne(SubCategory::class,'id','sub_category_id');
     }
     public function brand(){
      return $this->hasOne(Brand::class,'id','brand_id');

     }
     public function size(){
      return $this->hasOne(Brand::class,'id','size_id');

     }
     static $active = 1;
     static $inActive = 2;
}
