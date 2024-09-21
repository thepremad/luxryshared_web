<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ForgetPasswordMail;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class ForgetPasswordController extends Controller
{
    public function forgetPassword(){
        $menu = Menu::latest()->get();
        return view('frontend.forget-password1',compact('menu'));
    }

    public function forgotPassword(Request $request){
        $this->validate($request,[
            'email' =>'required|email',
        ]);
        $user = User::where('email',$request->email)->first();

        if($user){
            $otp = [
                "otp" => rand('1000','9999')
            ];
            $user->otp = $otp['otp'];
            $user->save();
            $menu = Menu::latest()->get();
            Mail::to($user->email)->send(new ForgetPasswordMail($otp));
            Session::flash('success-mail','send OTP on your Email');
            return view('frontend.forget-password2',compact('menu','user'));
        }
        $menu = Menu::latest()->get();
        Session::flash('fail-mail','your Email does not exist');
        return view('frontend.forget-password1',compact('menu'));

    }

    public function matchotpp(Request $request,$id){
        
            $menu = Menu::latest()->get();
            $user = User::where('id',$id)->first();
            return view('frontend.forget-password3',compact('menu','user'));
        }
    

    public function matchOtp(Request $request,$id){
        // dd('b');
        $user = User::where('id',$id)->first();
        if($request->mainotp==$user->otp){
            $menu = Menu::latest()->get();
            $user = User::where('id',$id)->first();
            return view('frontend.forget-password3',compact('menu','user'));
        }
        $menu = Menu::latest()->get();
        Session::flash('incorrect-otp','you have entered wrong OTP');
        return view('frontend.forget-password2',compact('menu','user'));
        
    }

    public function newPasswordd(Request $request,$id){
       
        $menu = Menu::latest()->get();
        $user = User::where('id',$id)->first();
        return view('frontend.forget-password4',compact('menu','user'));
    }
    public function newPassword(Request $request,$id){
        $validated = $request->validate([
            'password'=>'required',
            'confirm-password'=>'required_with:password|same:password',
        ]);

        $menu = Menu::latest()->get();
        $user = User::where('id',$id)->first();
        $user->password = \Hash::make($request->password);
        $user->save();
        return view('frontend.forget-password4',compact('menu','user'));

    }
    
    
}
