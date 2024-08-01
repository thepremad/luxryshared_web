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
                'rating' => 5,
            ];
    }
}
