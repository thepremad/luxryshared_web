<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function approveRequest($id){
        $user = User::findOrFail($id);
        $user->status = User::$approved;
        $user->save();
        return redirect()->back();
    }
    public function rejectRequest($id){
        $user = User::findOrFail($id);
        $user->status = User::$rejected;
        $user->save();
        return redirect()->back();

    }
    public function registerRequest(){
        $user = User::where('status',User::$pending)->where('email','!=','admin@gmail.com')->latest()->paginate(10);
        return view('backend.user-listing.index',compact('user'));
    }
    public function userIndex(){
        $user = User::where('status',User::$approved)->where('email','!=','admin@gmail.com')->latest()->paginate(10);
        return view('backend.user-listing.users',compact('user'));
    }
    public function profile($id){
        $user = User::findOrFail($id);
        return view('backend.user-listing.profile',compact('user'));
    }
}
