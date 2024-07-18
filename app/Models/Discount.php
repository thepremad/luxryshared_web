<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'exp_date',
        'offer_type',
        'in_per',
        'fix_amount',
        'limit',
        'category_id'
    ];
}
