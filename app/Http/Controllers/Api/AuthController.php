<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreSignupRequest;
use App\Mail\UserVerificationMail;
use App\Models\User;
use App\Traits\ApiResponse;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    use FileUploadTrait;
    use ApiResponse;
    public function signup(StoreSignupRequest $request)
    {
        try {
            $user = $request->all();
            if ($file = $request->file('id_image')) {
                $folder = public_path('/uploads/image');
                $user['id_image'] = $this->uploadFile($file, $folder);
            }
            $otp = mt_rand(1000, 9999);
            $data = [
                'otp' => $otp
            ];
            \Mail::to($request->email)->send(new UserVerificationMail($data));
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
            if (auth()->attempt($credentials)) {
                $token = auth()->user()->createToken('Token')->accessToken;
                return response()->json(['access_token' => $token], 200);
            } elseif ($user) {
                return response()->json(['error' => ['password' => "Incorrect password entered. Please try again."]], 422);
            } else {
                return response()->json(['error' => ['email' => "User does not exist! Please Register"]], 422);
            }
        } catch (\Throwable $th) {
            Log::error('api login post : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function signupVerification(Request $request)
    {
        try {
            $user = new User();
            $user->fill($request->all());
            $user->password = \Hash::make($request->password);
            $user->save();
            return response()->json(['message' => 'Successfully Registered'], 200);
        } catch (\Throwable $th) {
            Log::error('api signupVerification post : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
}
