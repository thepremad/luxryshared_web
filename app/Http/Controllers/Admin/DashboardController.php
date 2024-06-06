<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $userCount = User::where('email','!=','admin@gmail.com')->count();
        $user = User::where('status',User::$pending)->where('email','!=','admin@gmail.com')->latest()->take(10)->get();
        return view('backend.dashboard.dashboard',compact('user','userCount'));
    }
}
