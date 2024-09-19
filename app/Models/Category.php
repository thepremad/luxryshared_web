<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{ 
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'image',
    ];
    static $active = 1;
    static $in_active = 0;
    
    public function products(){
        return $this->hasMany(Item::class,'category_id')->where('status',Item::$active)->where('checkout_status','0');
    }
   
}
