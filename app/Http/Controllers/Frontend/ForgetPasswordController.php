<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{
    public function forgetPassword(){
        $menu = Menu::latest()->get();
        return view('frontend.forget-password',compact('menu'));
    }

    public function forgotPassword(Request $request){
        $this->validate($request,[
            'email' =>'required|email',
        ]);
        $menu = Menu::latest()->get();

    }
}
