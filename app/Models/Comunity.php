<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunity extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'image',
        'status'
    ];
    static $active = 1;
    static $in_active = 0;

    public function comunity_image(){
        return $this->hasOne(ComunityImages::class,'comunity_id');
    }
}
