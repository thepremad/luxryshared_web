<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class WithdrawlRequest extends Controller
{
    public function withdrawlRequest(){
        try {
            $items = Checkout::with('city')->where('withdrawl_request','!=',Checkout::$pending)->paginate(10);
            // dd($items);
            return view('backend.withdrawl-request.index',compact('items'));
        } catch (\Throwable $th) {
            \Log::error('Admin login error: ' . $th->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
    public function withdrawlRequestApprove($id){
        try {
           $check = Checkout::where('id',$id)->first();
           $check->withdrawl_request = Checkout::$approved;
           $check->save();
           return response()->json(['message' => 'Approved request successfully','status' => 200]);
        } catch (\Throwable $th) {
            \Log::error('Admin login error: ' . $th->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
}
