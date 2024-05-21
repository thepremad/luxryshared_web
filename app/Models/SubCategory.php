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
    
}
