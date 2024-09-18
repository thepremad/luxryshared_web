<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\WebLoginRequest;
use Auth;
use Illuminate\Http\Request;

class LoginContriller extends Controller
{
    public function login(WebLoginRequest $request){
        try {
            $credinals = [
                'email' => $request->email,
                'password' => $request->password,
            ];
            if (Auth::attempt($credinals)) {
                return response()->json(['status' => 200, 'message' => 'login successfully']);
            }
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
}
