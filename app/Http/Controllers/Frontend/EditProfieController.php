<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWebEditProfileRequest;
use App\Http\Resources\LendingProductApiResource;
use App\Http\Resources\RentProductResource;
use App\Http\Resources\SellingResource;
use App\Models\Checkout;
use App\Models\Item;
use App\Models\Menu;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Wishlist;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class EditProfieController extends Controller
{
    use FileUploadTrait;
    public function editProfile()
    {
        $menu = Menu::latest()->get();
        $itemsCount = Item::where('user_id', auth()->user()->id)->count();
        // Lending
        $date = date('d-m-Y');
        $lendingData = Checkout::with(['products', 'products.users', 'user', 'bookingdate'])
            ->where('seller_id', auth()->user()->id)
            ->whereHas('bookingdate', function ($query) use ($date) {
                $query->where('date', '=', $date); // Ensure 'date' is the correct column in the 'bookingdate' relation
            })->get();
            // dd($lendingData);

        // Renting
        $rentingData = Checkout::with('products', 'products.users', 'saler')->where('user_id', auth()->user()->id)->where('checkout_status', 0)->get();
        // Buy
        $cart = Checkout::with('products', 'products.users', 'products.brand', 'products.color', 'products.size')->where('user_id', auth()->user()->id)->where('checkout_status', 1)->get();
        $buyData = RentProductResource::collection($cart);

        // sale
        $item = Checkout::with('products', 'products.users', 'products.brand', 'products.color', 'products.size')->where('seller_id', auth()->user()->id)->get();
        $saleData = SellingResource::collection($item);

        // WishList
        $wishlist = Wishlist::with('products')->where('user_id', auth()->user()->id)->latest()->get();


        $wallet_amount = Wallet::where('user_id',auth()->user()->id)->sum('amount');
        
        return view('frontend.edit-profile', compact('menu', 'itemsCount', 'lendingData', 'rentingData', 'buyData', 'saleData', 'wishlist','wallet_amount'));
    }
    public function editWebProfile(StoreWebEditProfileRequest $request)
    {
        try {
            $user = User::find(auth()->user()->id);
            $user->fill($request->all());
            if ($file = $request->file('id_image')) {
                $folder = public_path('/uploads/image');
                $user['id_image'] = $this->uploadFile($file, $folder);
            }if ($request->password) {
                # code...
                $user->password = \Hash::make($request->password);
            }
            $user->save();
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function saveCheckout(Request $request){
        return redirect("checkout/$request->size/$request->id/$request->rentDays/0");
    }
    public function checkoutSuccess(){
        $menu = Menu::latest()->get();
        return view('frontend.checkout-success',compact('menu'));
    }
    public function withdrawlRequest($id){
        try {
            $check = Checkout::where('id',$id)->first();
            $check->withdrawl_request = Checkout::$approved;
            $check->save();
            return redirect()->back();
         } catch (\Throwable $th) {
             \Log::error('Admin login error: ' . $th->getMessage());
             return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
         }
    }
    public function help(){
        $menu = Menu::latest()->get();
        return view('frontend.help',compact('menu'));
    }
}
