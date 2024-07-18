<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SugestedDayPrice extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $dayPrice = $request->price;
        $fourDayPrice = $dayPrice*4 ;
        $weekPrice = $dayPrice * 7;
        $discountedPrice = $weekPrice * (1 - 0.35);
        $monthPrice = $dayPrice*30;
        $discountedPrice30 = $monthPrice * (1 - 0.60);
        return [
            'price' =>  number_format($dayPrice, 2),
            'fourDaysPrice' => number_format($fourDayPrice, 2),
            'sevenToTwentyNineDayPrice' => number_format($discountedPrice, 2),
            'thirtyPlusDayPrice' => number_format($discountedPrice30, 2),
        ];
    }
}
