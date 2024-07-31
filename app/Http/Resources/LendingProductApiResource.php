<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LendingProductApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->products->id ?? '',
            'icon' => $this->products?->mainImag
                ? url('public/uploads/item/' . $this->products?->mainImag)
                : null,
            'productName' => $this->products->item_title ?? '',
            'price' => $this->products->rrp_price ?? '',
            'rating' => 5,
            'rentorName' => $this->user->first_name,
            'RentorMobNumber' => $this->user->number,
            'paymentDetails' => $this->products->rrp_price ?? '',
            'bookingDate' => '14 May 2024',
            'rentalPeriod' => '14 May 2024 Till 18 May 2024',
            'quantity_of_product' => 1,
            'rentalEmail' => $this->user->email,
            'final_amount' => $this->products->rrp_price ?? '',
            'status' => 'Pending/Paid'

        ];
    }
}
