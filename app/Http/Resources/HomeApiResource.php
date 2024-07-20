<?php

namespace App\Http\Resources;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Commission;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\Look;
use App\Models\Occasion;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HomeApiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $sizes = Size::latest()->get();
        $item = Item::latest()->take(6)->get();
        $look = GetTheLookResource::collection(Look::latest()->get());
        $brand = Brand::latest()->take(6)->get();
        $productImage = ItemImage::where('item_id', $this->id)->get();
        $productImageResource = ProductImageresource::collection($productImage);
        $commission = Commission::first();

        $calculateCommission = function($product) use ($commission) {
            if ($commission) {
                $foreDayPrices = ($product->fourDaysPrice * $commission->commission) / 100;
                $final_fourDay = $product->fourDaysPrice - $foreDayPrices;

                $savenDayPrices = ($product->sevenToTwentyNineDayPrice * $commission->commission) / 100;
                $final_savenDay = $product->sevenToTwentyNineDayPrice - $savenDayPrices;

                $tenDayPrices = ($product->thirtyPlusDayPrice * $commission->commission) / 100;
                $final_tennDay = $product->thirtyPlusDayPrice - $tenDayPrices;

                return [
                    'forDayCommission' => $final_fourDay,
                    "eightDaysCommissionPrice" => $final_savenDay,
                    "fiftyDaysCommissionPrice" => $final_tennDay
                ];
            }
            return null;
        };

        return [
            'id' => $this->id,
            'name' => $this->name,
            'products' => $this->products->map(function ($product) use ($sizes, $productImageResource, $calculateCommission) {
                return [
                    'id' => $product->id ?? '',
                    'image' => $product->mainImag ? url('public/uploads/item/' . $product->mainImag) : null,
                    'product_image' => $productImageResource,
                    'name' => $product->item_title ?? '',
                    'rating' => '5 star',
                    'price' => $product->rrp_price ?? '',
                    'comment' => '',
                    'size' => SizeResource::collection($sizes),
                    'rentalPeriodPrice' => [
                        'forDaysPrice' => $product->fourDaysPrice,
                        'eightDaysPrice' => $product->sevenToTwentyNineDayPrice,
                        'fiftyDaysPrice' => $product->thirtyPlusDayPrice
                    ],
                    'commission' => $calculateCommission($product),
                    'byNowPrice' => $product->buy_price,
                    'retailsPrice' => $product->rrp_price,
                    'product_description' => $product->image_description,
                    'buy' => $product->buy
                ];
            }),
            'just_landed' => $item->map(function ($product) use ($sizes, $productImageResource, $calculateCommission) {
                return [
                    'id' => $product->id ?? '',
                    'image' => $product->mainImag ? url('public/uploads/item/' . $product->mainImag) : null,
                    'product_image' => $productImageResource,
                    'name' => $product->item_title ?? '',
                    'rating' => '5 star',
                    'price' => $product->rrp_price ?? '',
                    'comment' => '',
                    'size' => SizeResource::collection($sizes),
                    'rentalPeriodPrice' => [
                        'forDaysPrice' => $product->fourDaysPrice,
                        'eightDaysPrice' => $product->sevenToTwentyNineDayPrice,
                        'fiftyDaysPrice' => $product->thirtyPlusDayPrice
                    ],
                    'commission' => $calculateCommission($product),
                    'byNowPrice' => $product->buy_price,
                    'retailsPrice' => $product->rrp_price,
                    'product_description' => $product->image_description,
                    'buy' => $product->buy
                ];
            }),
            'get_the_look' => $look,
            'brands' => BrandResource::collection($brand),
        ];
    }
}