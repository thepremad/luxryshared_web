<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HomeApiResource;
use App\Models\Category;
use App\Models\Occasion;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
         $categories = Category::with('products')->latest()->get();
         $data = HomeApiResource::collection($categories);
         return response()->json($data);
    }
}
