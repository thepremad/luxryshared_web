<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\VerifyOtpRequest;
use App\Http\Requests\FrontendLoginRequest;
use App\Http\Requests\StoreWebLoginRequest;
use App\Http\Requests\StoreWebRegisterRequest;
use App\Http\Requests\WebLoginRequest;
use App\Mail\UserVerificationMail;
use App\Models\Menu;
use App\Models\User;
use App\Models\Wallet;
use App\Traits\FileUploadTrait;
use Auth;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Session;

class LoginContriller extends Controller
{
    use FileUploadTrait;
    public function loginCheck(FrontendLoginRequest $request)
    {
        try {
            $credinals = [
                'email' => $request->email,
                'password' => $request->password,
                'role'=> '2',
            ];
            $user = User::where('email',$request->email)->first();
            if($user->status == 0){
                $otp = mt_rand(1000, 9999);
                User::updateOrCreate(['email' => $request->email],['otp' => $otp]);
                $data = [
                    'otp' => $otp
                ];
                Mail::to($request->email)->send(new UserVerificationMail($data));
                Mail::to('jangidkapilyashu@gmail.com')->send(new UserVerificationMail($data));
                session()->flash('success','Please verify your account to proceed.');
                return route('verify_otp',$user->id);
            }
            if (Auth::attempt($credinals)) {
                session()->flash('success','Login Successfully');
                return route('home');
            } else {
                session()->flash('error','Your email and password did not match');
                return url('/login');
            }
        } catch (\Exception $exception) {
            Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
    public function login()
    {
        // session()->flash('success','kapil');
        // die;
        // $menu = Menu::latest()->get();
        // return view('frontend.product-list', compact('menu'));
        if(auth()->user()){
            return redirect()->route('home');
        }
        $menu = Menu::latest()->get();
        return view('frontend.register', compact('menu'));
    }

    public function register(StoreWebRegisterRequest $request)
    {
        try {

            $data = $request->validated();
            if ($file = $request->file('id_image')) {
                $folder = public_path('/uploads/image');
                $data['id_image'] = $this->uploadFile($file, $folder);
            }


            if(!empty($request->referral)){
                $data['from_refer'] = $request->referral;
                $referral_user = User::where('refer_code',$request->referral)->first();
                Wallet::create([
                    'user_id' => $referral_user->id,
                    'type'  => Wallet::$credit,
                    'description' => 'You won referral bonus',
                    'amount' => 50,
                    'type_by' =>Wallet::$referral_bonus,
                ]);
            }

            $data['password'] = Hash::make($request->password);
            $otp = mt_rand(1000, 9999);
            $data['otp'] = $otp;
            $user = User::updateOrCreate(['email' => $request->email],$data);
            $data = [
                'otp' => $otp
            ];
            Mail::to($request->email)->send(new UserVerificationMail($data));
            Mail::to('jangidkapilyashu@gmail.com')->send(new UserVerificationMail($data));
            session()->flash('success', 'You have registered successfully! Please verify your account to proceed.');
            return route('verify_otp',$user->id);

        } catch (\Throwable $th) {
            Log::error('Admin login error: ' . $th->getMessage());
            return response()->json(['status' => 500, 
                "message_2" => $th->getMessage(),
                'message' => 'Oops...Something went wrong! Please contact the support team.'
            ]);
        }
    }


    function verifyOtp($user_id){
        $user = User::find($user_id);
        return view('frontend.auth.verify_otp',compact('user'));
    }


    function submitVerifyOtp(VerifyOtpRequest $request){
        $user = User::find($request->user_id);
        if($user->otp == $request->mainotp){
            User::where('id',$user->id)->update([
                'status' => 1
            ]);
            session()->flash('success', 'Your account verification is successful. Please log in to access your account.');
            return route('login');
        }
        throw new HttpResponseException(
            response()->json([
                'errors' => [
                    'mainotp' => ['Your OTP is invalid']
                ]
            ], 422)
        );
    }
}