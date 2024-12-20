<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResendOtpRequest;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreSignupRequest;
use App\Mail\UserVerificationMail;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Wallet;
use App\Traits\ApiResponse;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    use FileUploadTrait;
    use ApiResponse;


    function resendOtp(ResendOtpRequest $request)
    {
        try {
            $data = [
                'otp' => mt_rand(1000, 9999),
            ];
            Mail::to($request->email)->send(new UserVerificationMail($data));
            return response()->json(['otp' => $data['otp']], 200);
        } catch (\Throwable $th) {
            Log::error('api signup post : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function signup(StoreSignupRequest $request)
    {
        try {
            $user = $request->all();
            if ($file = $request->file('id_image')) {
                $folder = public_path('/uploads/image');
                $user['id_image'] = $this->uploadFile($file, $folder);
            }
            $user['from_refer'] = $request->referral;
            $otp = mt_rand(1000, 9999);
            $data = [
                'otp' => $otp
            ];
            $data['password'] = Hash::make($request->password);
            $user = User::create($user);
            if (!empty($request->referral)) {
                $referral_user = User::where('refer_code', $request->referral)->first();
                Wallet::create([
                    'user_id' => $referral_user->id,
                    'type'  => Wallet::$credit,
                    'description' => 'You won referral bonus',
                    'amount' => 50,
                    'type_by' => Wallet::$referral_bonus,
                ]);

                Wallet::create([
                    'user_id' => $user->id,
                    'type'  => Wallet::$credit,
                    'description' => 'You won referral commission',
                    'amount' => 50,
                    'type_by' => Wallet::$referral_commission,
                ]);
            }



            Mail::to($request->email)->send(new UserVerificationMail($data));
            return response()->json(['data' => $user, 'otp' => $otp], 200);
        } catch (\Throwable $th) {
            Log::error('api signup post : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function login(StoreLoginRequest $request)
    {
        try {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password
            ];
            $user = User::where('email', $request->email)->first();
            if ($request->email != 'admin@gmail.com') {
                if (auth()->attempt($credentials)) {
                    $token = $user->createToken('Token')->accessToken;
                    return response()->json(['access_token' => $token], 200);
                } elseif ($user) {
                    return response()->json(['error' => ['password' => "Incorrect password entered. Please try again."]], 422);
                } else {
                    return response()->json(['error' => ['email' => "User does not exist! Please Register"]], 422);
                }
            } else {
                return response()->json(['message' => 'admin unable to login'], 500);
            }
        } catch (\Throwable $th) {
            Log::error('api login post : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function signupVerification(StoreSignupRequest $request)
    {
        try {
            DB::beginTransaction();
            $user = User::where('email',$request->email)->first();
            $token = $user->createToken($user->name)->accessToken;
            DB::commit();
            return response()->json(['message' => 'Successfully Registered', 'token' => $token], 200);
        } catch (\Throwable $th) {
            Log::error('api signupVerification post : exception');
            Log::error($th);
            DB::rollBack();
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    protected function transactionRefer($id)
    {
        $transaction = new Transaction();
        $transaction->user_id = $id;
        $transaction->transcation_status = 'cr';
        $transaction->amount = 10;
        $transaction->transcation_type = 'refer amount';
        $transaction->save();
    }
    protected function transactionReferSend($id)
    {
        $transaction = new Transaction();
        $transaction->user_id = $id;
        $transaction->transcation_status = 'cr';
        $transaction->amount = 10;
        $transaction->transcation_type = 'bonus amount';
        $transaction->save();
    }
}
