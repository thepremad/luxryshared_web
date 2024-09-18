<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Look extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'product_id'
    ];
    public function products(){
        return $this->hasOne(Item::class,'id')->where('status',Item::$active)->where('checkout_status','0');
    }
}
