<?php

namespace App\Http\Resources;

use App\Models\Cart;
use App\Models\Menu;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        
    }
}
