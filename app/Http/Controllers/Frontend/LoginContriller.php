<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FrontendLoginRequest;
use App\Http\Requests\StoreWebLoginRequest;
use App\Http\Requests\StoreWebRegisterRequest;
use App\Http\Requests\WebLoginRequest;
use App\Models\Menu;
use App\Models\User;
use App\Traits\FileUploadTrait;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
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
            if (Auth::attempt($credinals)) {
                session()->flash('success','Login Successfully');
                return route('home');
            } else {
                session()->flash('error','your Email and Password did not match');
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
            $user = new User();
            $user->fill($request->all());
            if ($file = $request->file('id_image')) {
                $folder = public_path('/uploads/image');
                $user->id_image = $this->uploadFile($file, $folder);
                // die;
            }
            $user->password = Hash::make($request->password);
            $user->latitude = 1234;
            $user->longitude = 123;
            $user->save();
            session()->flash('success','Register successfully');
            // return redirect()->route('login');

        } catch (\Throwable $th) {
            Log::error('Admin login error: ' . $th->getMessage());
            return response()->json(['status' => 500, 
                "message_2" => $th->getMessage(),
                'message' => 'Oops...Something went wrong! Please contact the support team.'
            ]);
        }
    }
}