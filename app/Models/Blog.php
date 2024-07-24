<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    static $active = 1;
    static $in_active = 0;
    protected $fillable = [
        'text',
        'description',
        'category_id'
    ];
}
