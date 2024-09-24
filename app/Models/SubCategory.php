<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubCategory extends Model
{
    use HasFactory;
    static $active = 1;
    static $in_active = 0;
    protected $fillable = [
        'name',
        'status',
        'image',
        'category_id'
    ];
    public function cateogry(){
        return $this->BelongsTo(Category::class,'category_id');
    }
    public function subCateogryFilter($searched){
        return $this->when($searched, function ($query, $name) {
            $query->where('name', 'like', '%' . $name . '%');
        })->when($searched, function ($query, $cateogry) {
            $query->where('category_id','like','%'. $cateogry.'%' );
        });
    }
    
    // static $active = 1;
    // static $in_active = 0;
    
    public function item(){
        return $this->hasMany(Item::class,'category_id')->where('status',Item::$active)->where('checkout_status','0');
    }
}
