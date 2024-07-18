<?php

namespace App\Http\Resources;

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
        return [
            'id' => $this->id ?? '',
            'image' => $this->mainImag ? url('public/uploads/item/'.$this->mainImag) : null,
            'name' => $this->item_title ?? '',
            'rating' => '5 star',
            'price' => $this->rrp_price ?? '',
            'comment' => '',
            'size' => $data,
            'rentalPeriodPrice' =>['forDaysPrice' => $this->fourDaysPrice, 'eightDaysPrice' => $this->sevenToTwentyNineDayPrice, 'fiftyDaysPrice' => $this->thirtyPlusDayPrice],
            'byNowPrice' => $this->buy_price,
            'retailsPrice' => $this->rrp_price,
            'product_description' => $this->image_description
        ];
    }
}
