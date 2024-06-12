<?php

namespace App\Http\Resources;

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
        return [
            'id' => $this->id,
            'image' => $this->mainImag ? url('public/uploads/item/'.$this->mainImag) : null,
            'name' => $this->item_title,
            'rating' => '5 star',
            'price' => $this->rrp_price,
        ];
    }
}
