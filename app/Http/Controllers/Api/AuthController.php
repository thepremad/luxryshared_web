<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLoginRequest;
use App\Http\Requests\StoreSignupRequest;
use App\Models\User;
use App\Traits\ApiResponse;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    use FileUploadTrait;
    use ApiResponse;
    public function signup(StoreSignupRequest $request){
        try {
            $user = new User();
            $user->fill($request->all());
            if ($file = $request->file('id_image')) {
                $folder = public_path('/uploads/image');
                $user->id_image = $this->uploadFile($file, $folder);
            }
            $user->password = \Hash::make($request->password);
           $user->save();
           return response()->json(['message' => 'Successfully Registered'], 200);
        } catch (\Throwable $th) {
            Log::error('api signup post : exception');
            Log::error($th);
            return response()->json(['error'=> "Something went wrong. Please try again later."],500);
        }
    }
    public function login(StoreLoginRequest $request){
        try {
              $credentials = [
                'email' => $request->email,
                'password' => $request->password
              ];
              if (auth()->attempt($credentials)) {
                  $token = auth()->user()->createToken('Token')->accessToken;
                  $status = auth()->user()->status == '1' ? true : false;
                  return response()->json(['admin_approval' => $status,'access_token' => $token ],200);
              } else {
                  return response()->json(['error'=>['email' => "User does not exist! Please Register"]], 422);
              }
          } catch (\Throwable $th) {
            Log::error('api login post : exception');
            Log::error($th);
            return response()->json(['error'=> "Something went wrong. Please try again later."],500);
          }
    }
}
