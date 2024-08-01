<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LendingProductApiResource;
use App\Http\Resources\SellingResource;
use App\Models\Checkout;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class SellingController extends Controller
{
    public function selling(){
        try {
            $item = Checkout::with('products','products.users')->where('seller_id',auth()->user()->id)->get();
            $data = SellingResource::collection($item);
            return response()->json($data,200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function lending(){
        try {
            $date = date('d-m-Y');

            $item = Checkout::with(['products', 'products.users', 'user', 'bookingdate'])
                ->where('seller_id', auth()->user()->id)
                ->whereHas('bookingdate', function ($query) use ($date) {
                    $query->where('date', '=', $date); // Ensure 'date' is the correct column in the 'bookingdate' relation
                })->get();
            $data = LendingProductApiResource::collection($item);
            return response()->json($data,200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        } 
    }
}
