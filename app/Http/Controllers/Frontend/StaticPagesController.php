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
    public function legalPolicy(){
        $menu = Menu::latest()->get();
        return view('frontend.legal-policy',compact('menu'));
    }
    public function howToLend(){
        $menu = Menu::latest()->get();
        return view('frontend.how-it-work',compact('menu'));
    }
    public function sharingIsCaring(){
        $menu = Menu::latest()->get();
        return view('frontend.sharing-is-caring',compact('menu'));
    }
}
