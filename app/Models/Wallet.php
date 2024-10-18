<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    static $debit = 'debit';
    static $credit = 'credit';

    protected $fillable = [
        'user_id',
        'type',
        'amount',
        'description',
        'type_by'
    ];

    static $referral_bonus = 'referral_bonus';


}

