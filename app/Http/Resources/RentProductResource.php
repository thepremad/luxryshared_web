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
        return [
                'id' => $this->products->id ?? null,
                'icon' => $this->products?->mainImag 
                ? url('public/uploads/item/'.$this->products?->mainImag) 
                : null,
                'productName' => $this->products->item_title ?? 'N/A',
                'price' => $this->product_price ?? 0,
                'ownerName' => ($this->products->users->first_name ?? '') . ' ' . ($this->products->users->last_name ?? ''),
                'rentorName' => (auth()->user()->first_name ?? '') . ' ' . (auth()->user()->last_name ?? ''),
                'RentorMobNumber' => auth()->user()->number ?? 'N/A',
                'paymentDetails' => $this->product_price ?? 0,
                'bookingDate' => $this->created_at 
                    ? $this->created_at->format('d F Y') 
                    : 'N/A',
                'quantity_of_product' => 1,
                'rentalEmail' => auth()->user()->email ?? 'N/A'
            ]
    }
}
