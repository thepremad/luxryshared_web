<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreBlogResourceApi extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'text' => $this->text ?? '',
            'description' => $this->description ?? '',
            'category' => $this->category ?? '',
            'image' =>  $this->image
            ? url('public/uploads/blogs/' . $this->image)
            : null,
        ];
    }
}
