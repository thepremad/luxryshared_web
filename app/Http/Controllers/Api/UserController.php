<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProfileRequest;
use App\Http\Resources\GetProfileResource;
use App\Models\User;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    use FileUploadTrait;
    public function profile()
    {
        try {
            $user = User::findOrFail(auth()->user()->id);
            if ($user) {
                $data = new GetProfileResource($user);
                return response()->json([$data], 200);

            }
        } catch (\Throwable $th) {
            Log::error('admin login post : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
    public function updateProfile(StoreUpdateProfileRequest $request)
    {
        try {
            $user = User::find(auth()->user()->id);
            $user->fill($request->all());
            if ($file = $request->file('id_image')) {
                $folder = public_path('/uploads/image');
                $user->id_image = $this->uploadFile($file, $folder);
            }
            if ($file = $request->file('profile')) {
                $folder = public_path('/uploads/profile');
                $user->profile = $this->uploadFile($file, $folder);
            }
            if ($request->password) {
                $user->password = \Hash::make($request->password);
            }
            $user->save();
            return response()->json(["message" => "Profile Update Successfully."], 200);

        } catch (\Throwable $th) {
            Log::error('admin login post : exception');
            Log::error($th);
            return response()->json(['error' => "Something went wrong. Please try again later."], 500);
        }
    }
}