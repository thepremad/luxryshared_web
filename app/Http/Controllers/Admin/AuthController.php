<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\StoreAdminUpdateProfile;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Admin;
use App\Models\User;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function loginView()
    {
        if (auth()->user()) {
            return redirect()->route('admin.dashboard');
        }
        return view('backend.auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(StoreAdminRequest $request)
    {
        try {
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
                'role' => '1'
            ];
            if (Auth::attempt($credentials)) {
                return response()->json(['status' => 200, 'message' => 'Login Successfully']);
            } else {
                return response()->json(['status' => 422, 'message' => 'Invalid credentials. Please check your email and password and try again.']);
            }
        } catch (\Exception $exception) {
            Log::error('Admin login error: ' . $exception->getMessage(), [
                'request' => $request->all()
            ]);
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
        
    }

    function logout()
    {
        try {
            Auth::logout();
            return redirect()->route('admin.login');
        } catch (\Exception $exception) {
            Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }

}
public function editProfile(){
    $user = User::where('email','admin@gmail.com')->first();
 return view('backend.auth.edit',compact('user'));       
}
public function updateAdminProfile(StoreAdminUpdateProfile $request){
    try {
        $user = User::find(auth()->user()->id);
        $user->fill($request->all());
        $user->password = \Hash::make($request->password);
        if ($file = $request->file('profile')) {
            $folder = public_path('/uploads/profile');
            $user->profile = $this->uploadFile($file, $folder);
        }
       $user->save();
       return response()->json(['status' => 200, 'message' => ' Successfully Update Profile']);

    } catch (\Throwable $th) {
        Log::error('admin login post : exception');
        Log::error($th);
        return response()->json(['error'=> "Something went wrong. Please try again later."],500);
    }
}
}
