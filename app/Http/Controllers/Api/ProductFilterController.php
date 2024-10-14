<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddProductRequest;
use App\Http\Resources\GetCartResource;
use App\Http\Resources\GetProductResource;
use App\Models\Cart;
use App\Models\Item;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class ProductFilterController extends Controller
{
    public function filterHome(Request $request)
    {
        try {
            $query = Item::query();
            $query->where('checkout_status','0');
    
            $filters = [
                'sub_category_id' => 'sub_category_id',
                'color' => 'color_id',
                'size' => 'size_id',
                'occasion' => 'occasion_id',
                'Brand' => 'Brand_id'
            ];
            foreach ($filters as $requestKey => $columnName) {
                if ($request->filled($requestKey)) {
                    $query->where($columnName, $request->$requestKey);
                }
            }
    
            // Handle price range
            if ($request->filled('price')) {
                $price = $request->price;
                $priceRange = explode(',', $price);
                
                if (count($priceRange) == 2) {
                    $minPrice = (float) $priceRange[0];
                    $maxPrice = (float) $priceRange[1];
                    
                    $query->where(function($q) use ($minPrice, $maxPrice) {
                        $q->where('rrp_price', '>=', $minPrice)
                          ->where('rrp_price', '<=', $maxPrice);
                    });
                }
            }
    
            // Handle 'near me' filter
            if ($request->filled('near_me') && $request->near_me == 'true') {
                $user = auth()->user();
                if ($user && $user->latitude && $user->longitude) {
                    $lan = $user->latitude;
                    $lon = $user->longitude;
                    $distance = 25; // You can make this configurable if needed
    
                    User::where('id', '!=', auth()->user()->id)
                    ->selectRaw("*, ( 6371 * acos( cos( radians(?) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(?) ) + sin( radians(?) ) * sin( radians( latitude ) ) ) ) AS distance", [$lan, $lon, $lan])
                    ->having('distance', '<', $distance)
                    ->orderBy('distance');
                }
            }
    
            // Exclude the current user's items
            $query->where('user_id', '!=', auth()->id());
    
            $products = $query->get();
            $formattedProducts = GetProductResource::collection($products)->resolve();
            return response()->json($formattedProducts,200);
        } catch (\Exception $e) {
            \Log::error('Filter Home Error: ' . $e->getMessage());
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while filtering products.',
                'error' => $e->getMessage()
            ], 500);
        }
    }


    public function addTocart(StoreAddProductRequest $request){
        try {
            $checkCartItems = Cart::where('item_id',$request->item_id)->where('user_id',auth()->user()->id)->first();
            if ($checkCartItems) {
                return response()->json(['error' => ['item_id' => 'Item Already Addes In Cart']], 422);
            }
            Wishlist::where('item_id',$request->item_id)->where('user_id',auth()->user()->id)->delete();

            
            $cart = new Cart();
            $cart->item_id = $request->item_id;
            $cart->days = $request->days;
            $cart->user_id = auth()->user()->id;
            $cart->save();
            $data = $cart;
            $data['message'] = "Item Add Successfully";
            return response()->json($data, 200);
        }catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error'=> "Something went wrong. Please try again later."],500);
        }
    }

    
    public function shoppingBag(){
        try {
            $cart = Cart::with('products')->where('user_id',auth()->user()->id)->latest()->get();
            $data = GetCartResource::collection($cart);
            return response()->json($data,200);
        }catch (\Throwable $th) {
            \Log::error('api item post : exception');
            \Log::error($th);
            return response()->json(['error'=> "Something went wrong. Please try again later."],500);
        }
    }
}
