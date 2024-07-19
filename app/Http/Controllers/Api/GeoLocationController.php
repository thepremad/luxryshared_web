<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GetProductResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class GeoLocationController extends Controller
{
    public function nearMeProducts()
    {
        try {
            $user = User::findOrFail(auth()->user()->id);
            $lan = $user->latitude;
            $lon = $user->longitude;
            $distance = 25;

            $userData = User::with('products')
                ->where('id', '!=', auth()->user()->id)
                ->selectRaw("*, ( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance", [$lan, $lon, $lan])
                ->having('distance', '<', $distance)
                ->orderBy('distance')
                ->get();

            $allProducts = $userData->flatMap(function ($user) {
                return $user->products;
            });
            $products = GetProductResource::collection($allProducts)->resolve();
            return response()->json($products, 200);
        } catch (\Throwable $th) {
            Log::error('api category get : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function nearMeProducts2()
    {
        try {
            $user = User::findOrFail(auth()->user()->id);
            $lan = $user->latitude;
            $lon = $user->longitude;
            $distance = 10;

            $userData = User::with('products')->where('id', '!=', auth()->user()->id)->selectRaw("*, ( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance", [$lan, $lon, $lan])
                ->having('distance', '<', $distance)
                ->orderBy('distance')
                ->get();

            $products = $userData->flatMap(function ($user) {
                return GetProductResource::collection($user->products);
            });
            return response()->json($products, 200);
        } catch (\Throwable $th) {
            Log::error('api category get : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
}
