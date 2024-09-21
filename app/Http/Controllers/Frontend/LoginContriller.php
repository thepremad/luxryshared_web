<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWebLoginRequest;
use App\Http\Requests\StoreWebRegisterRequest;
use App\Http\Requests\WebLoginRequest;
use App\Models\Menu;
use App\Models\User;
use App\Traits\FileUploadTrait;
use Auth;
use Illuminate\Http\Request;

class LoginContriller extends Controller
{
    use FileUploadTrait;
    public function loginCheck(Request $request)
    {
        try {
            //$this->validate()
            $credinals = [
                'email' => $request->email,
                'password' => $request->password,
                'role'=> '2',
            ];
            if (Auth::attempt($credinals)) {
                return redirect()->route('home');
            } else {
                return redirect('/');
                

            }
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
    public function login()
    {
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
            }
            $user->latitude = 1234;
            $user->longitude = 123;
            $user->save();
                return redirect()->route('login');


        } catch (\Throwable $th) {
            \Log::error('Admin login error: ' . $th->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
}