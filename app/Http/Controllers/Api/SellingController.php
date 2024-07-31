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
            $item = Checkout::with('products','products.users')->where('seler_id',auth()->user()->id)->where('status','1')->get();
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
            $item = Checkout::with('products','products.users','user')->where('seler_id',auth()->user()->id)->where('status','0')->get();
            $data = LendingProductApiResource::collection($item);
            return response()->json($data,200);
        } catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        } 
    }
}
