<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'first_name',
        'last_name',
        'number',
        'refer_code',
        'address',
        'id_image',
        'otp',
        'profile',
        'facebook',
        'instagram',
        'twitter',
        'tiktok',
        'latitude',
        'longitude',
        'from_refer'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    static $pending = 0;
    static $approved = 1;
    static $rejected = 2;

    public function products(){
        return $this->hasMany(Item::class,'user_id');
    }

    public static function updateReferCode($user_id){
        $user = User::find($user_id);
        $firstThreeChars = substr($user->first_name, 0, 4);
        $fixedNumber = str_pad($user->id, 5, '0', STR_PAD_LEFT);
        $referal_code = strtoupper($firstThreeChars.$fixedNumber);
        User::where('id',$user->id)->update([
            'refer_code' => $referal_code,
        ]);
    }



    protected static function boot() {
        parent::boot();

        static ::created(function($user){
            if(empty($user->referral_code)){
                $firstThreeChars = substr($user->first_name, 0, 4);
                $fixedNumber = str_pad($user->id, 5, '0', STR_PAD_LEFT);
                $referal_code = strtoupper($firstThreeChars.$fixedNumber);
                User::where('id',$user->id)->update([
                    'refer_code' => $referal_code,
                ]);
            }
        });

    }
}
