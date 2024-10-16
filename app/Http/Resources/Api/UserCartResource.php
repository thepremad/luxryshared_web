<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserCartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data =  parent::toArray($request);

        if(!empty($this->products->mainImag)){
            $data['products']['mainImag'] = url('public/uploads/item/'.$this->products->mainImag);
        }

        return $data;
    }
}
