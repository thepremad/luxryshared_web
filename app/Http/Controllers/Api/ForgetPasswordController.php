<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoewVerifyOtpRequest;
use App\Http\Requests\StoreCreatePasswordrequest;
use App\Http\Requests\StoreForgetPasswordRequest;
use App\Mail\ForgetPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ForgetPasswordController extends Controller
{
    public function forgotPassword(StoreForgetPasswordRequest $request){
        try {
            $user = User::where('email',$request->email)->first();
            $otp = mt_rand(1000, 9999);
            $data = [
              'otp' =>$otp
          ];
          \Mail::to($request->email)->send(new ForgetPasswordMail($data));
            if ($user) {
                $user->otp = $otp;
                $user->save();
               return response()->json(['message' => "OTP sent successfully to your email",'user_id' =>  $user->id], 200);
            }else{
               return response()->json(['error' => ['error' => "The entered email is not registered. Please register first"]], 422);
    
            }
        } catch (\Throwable $th) {
            Log::error('admin login post : exception');
            Log::error($th);
            return response()->json(['error'=> "Something went wrong. Please try again later."],500);
        }
    }
    public function verifyOtp(StoewVerifyOtpRequest $request){
        try {
            $user = User::where('id',$request->user_id)->where('otp',$request->otp)->first();
            if ($user) {
               return response()->json(['message' => "Verification successfully"], 200);
            }else{
               return response()->json(['error' => ['otp' => "Incorrect Verification Code"]], 422);
            }
        } catch (\Throwable $th) {
            Log::error('admin login post : exception');
            Log::error($th);
            return response()->json(['error'=> "Something went wrong. Please try again later."],500);
        }
    }
    public function createPassword(StoreCreatePasswordrequest $request){
        try {
            $user = User::findOrFail($request->user_id);
            $user->password = \Hash::make($request->password);
            $user->save();
            return response()->json(['message' => "New Password created successfully"], 200);
        }  catch (\Throwable $th) {
            Log::error('admin login post : exception');
            Log::error($th);
            return response()->json(['error'=> "Something went wrong. Please try again later."],500);
        }
    }
}
