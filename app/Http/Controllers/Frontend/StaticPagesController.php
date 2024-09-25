<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function desclimer(){
        $menu = Menu::latest()->get();
        return view('frontend.disclaimer',compact('menu'));
    }
    public function notFound(){
        $menu = Menu::latest()->get();
        return view('frontend.404',compact('menu'));
    }
}
