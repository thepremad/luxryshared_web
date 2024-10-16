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
}
