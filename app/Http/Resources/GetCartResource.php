<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetCartResource extends JsonResource
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
            'name' => $this->products->item_title,
            'icon' => $this->mainImag ? url('public/uploads/item/'.$this->mainImag) : null,
            'price' => $this->products->rrp_price,
            'size' => $this->products->size->name,
        ];
    }
}
