<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SellingResource extends JsonResource
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
        ];
    }
}
