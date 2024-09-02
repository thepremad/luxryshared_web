<?php

namespace App\Http\Resources;

use App\Models\Commission;
use App\Models\ItemImage;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $size = Size::latest()->get();
        $data = SizeResource::collection($size);
        $productImage = ItemImage::where('item_id',$this->id)->get();
        $productImageResource = ProductImageresource::collection($productImage);
        $commisiion = Commission::first();
        if ($commisiion) {
            $foreDayPrices = ($this->fourDaysPrice*$commisiion->commission)/100;
            $final_fourDay = $this->fourDaysPrice - $foreDayPrices;
            
            $savenDayPrices = ($this->sevenToTwentyNineDayPrice*$commisiion->commission)/100;
            $final_savenDay = $this->sevenToTwentyNineDayPrice - $savenDayPrices;

            $tenDayPrices = ($this->thirtyPlusDayPrice*$commisiion->commission)/100;
            $final_tennDay = $this->thirtyPlusDayPrice - $tenDayPrices;
        }
        return [
            'id' => $this->id ?? '',
            'image' => $this->mainImag ? url('public/uploads/item/'.$this->mainImag) : null,
            'product_image' =>  $productImageResource,
            'name' => $this->item_title ?? '',
            'rating' => '5 star',
            'price' => $this->rrp_price ?? '',
            'comment' => '',
            'size' => $data,
            'rentalPeriodPrice' =>['forDaysPrice' => $this->fourDaysPrice, 'eightDaysPrice' => $this->sevenToTwentyNineDayPrice, 'fiftyDaysPrice' => $this->thirtyPlusDayPrice],
            'commission' =>['forDayCommission' => $final_fourDay ,"eightDaysCommissionPrice" =>$final_savenDay ,"fiftyDaysCommissionPrice" => $final_tennDay] ,
            'byNowPrice' => $this->buy_price,
            'retailsPrice' => $this->rrp_price,
            'product_description' => $this->image_description,
            'buy' => $this->buy,
            'rental_period' => $this->bookingDate->pluck('date','id')
        ];
    }
}
