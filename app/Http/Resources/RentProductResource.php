<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RentProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $firstName = $this->saler->first_name ?? '';
        $lastName = $this->saler->last_name ?? '';
        return [
            'id' => $this->products->id ?? null,
            'icon' => $this->products->mainImag 
                ? url('public/uploads/item/' . $this->products->mainImag) 
                : null,
            'productName' => $this->products->item_title ?? 'N/A',
            'price' => $this->product_price ?? 0,
            'rating' => 5,
            'rentorName' => $firstName . ' ' . $lastName,
            'RentorMobNumber' => $this->saler->number ?? '',
            'paymentDetails' => $this->product_price ?? '',
            'bookingDate' => $this->created_at 
                ? date_format($this->created_at, 'd-m-Y') 
                : '',
            'quility_of_product' => 1,
            'rentalEmail' => $this->saler->email ?? ''
        ];
    }
    
}
