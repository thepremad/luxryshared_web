<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GetProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "profile"=> $this->profile ? url('public/uploads/profile/'.$this->profile) : null,
            "first_name" => $this->first_name,
            "last_name" => $this->last_name,
            "email" => $this->email,
            "mobile_number" => $this->number,
            "id_image" => $this->id_image ? url('public/uploads/image/'.$this->id_image) : null,
            "facebook" =>$this->facebook ?? null,
            "insta" => $this->instagram ?? null,
            "twitter" => $this->twitter ?? null,
            "tiktok" => $this->tiktok ?? null,
        ];
    }
}
