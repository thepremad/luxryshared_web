<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDiscountRequest;
use App\Models\Category;
use App\Models\Discount;
use App\Models\DiscountProduct;
use App\Models\Item;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $discounts = Discount::when($query_search, function ($query) use ($query_search) {
                $query->where('code', 'like', '%' . $query_search . '%')
                      ->orWhere('in_per', 'like', '%' . $query_search . '%')
                      ->orWhere('exp_date', 'like', '%' . $query_search . '%');
            })
            ->latest()->paginate(10);            
            if ($request->ajax()) {
                return view('backend.discounts.pagination', compact('discounts'))->render();
            }
            return view('backend.discounts.index', compact('discounts'));
        } catch (\Throwable $th) {
            \Log::error('Admin login error: ' . $th->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $discounts = new Discount();
        $items = Item::latest()->get();
        $category = Category::latest()->get();
        return view('backend.discounts.create', compact('discounts', 'items', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiscountRequest $request)
    {
        try {
            $discounts = Discount::firstOrNew(['id' => $request->id]);
            $discounts->fill($request->all());
            $discounts->save();
            $products = $request->product_id;
                foreach ($products as $pro) {
                    $disProduct = new DiscountProduct();
                    $disProduct->product_id = $pro;
                    $disProduct->discounts_id = $discounts->id;
                    $disProduct->save();
            }

            return response()->json(['status' => 200, 'message' => ' Discountg Create Successfully ']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $discounts = Discount::findOrFail($id);
        $items = Item::latest()->get();
        $category = Category::latest()->get();

        return view('backend.discounts.create', compact('discounts', 'items','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $presses = Discount::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Discount Successfully login!']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }

    }
    public function getProducts(Request $request)
    {
        try {
            $products = Item::where('category_id', $request->id)->get();
            return response()->json(['data' => $products, 'status' => 200]);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
}
