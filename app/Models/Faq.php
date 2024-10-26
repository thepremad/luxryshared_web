<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $fillable = [
       'category_id',
       'text',
       'title'
    ];
    public function category(){
        return $this->belongsTo(CategoryMaster::class,'category_id');
    }
}
