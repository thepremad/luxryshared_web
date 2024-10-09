<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDayPriceRequests;
use App\Http\Requests\StoreItemRequest;
use App\Http\Resources\GetProductResource;
use App\Models\Item;
use Illuminate\Support\Facades\Log;
use App\Models\ItemImage;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    use FileUploadTrait;
    public function addListItem(StoreItemRequest $request)
    {
        try {
            $item = new Item();
            $item->user_id = auth()->user()->id;
            $item->fill($request->all());
            if ($file = $request->file('mainImag')) {
                $folder = public_path('/uploads/item');
                $item->mainImag = $this->uploadFile($file, $folder);
            }
            $item->save();
            for ($i = 1; $i <= 4; $i++) {
                $inputName = 'image_' . $i;
                if ($request->hasFile($inputName)) {
                    $image = $request->file($inputName);
                    $item_image = new ItemImage();
                    $item_image->item_id = $item->id;
                    $item_image->image = $this->uploadFile($image, public_path('/uploads/item'));
                    $item_image->save();
                }
            }
            return response()->json(['message' => 'Successfully Registered'], 200);
        } catch (\Throwable $th) {
            Log::error('api item post : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function product(Request $request)
    {
        try {
            if ($request->categoryId == '0') {
                $products = Item::where('status', Item::$active)->where('checkout_status', '0')->latest()->get();
            } else {
                $products = Item::where('category_id', $request->categoryId)->where('status', Item::$active)->where('checkout_status', '0')->get();
            }
            $data = GetProductResource::collection($products);
            return response()->json($data, 200);
        } catch (\Throwable $th) {
            Log::error('api item post : exception');
            Log::error($th);

            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function dayPrice(StoreDayPriceRequests $request)
    {
        $day_price = Item::where('rrp_price', $request->price)->sum('suggested_day_price');
        $count = Item::where('rrp_price', $request->price)->count();
        if ($count <= '1') {
            $dayPrice = ($request->price * 3) / 100;
        } else {
            $dayPrice = $day_price / $count;
        }
        $data =  number_format($dayPrice, 2);
        return response()->json(['day_price' => $data], 200);
    }
}
