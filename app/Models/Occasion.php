<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occasion extends Model
{
    use HasFactory;
    static $active = 1;
    static $inActive = 0;
    protected $fillable = [
        'name',
        'image',
        'status',
    ];
}
 