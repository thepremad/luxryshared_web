<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryMasterController extends Controller
{
    function index(Request $request){
        try {
            $query_search = $request->input('search');
            $category_masters = CategoryMaster::when($query_search, function ($query) use ($query_search) {
                $query->where('name', 'like', '%' . $query_search . '%');
            })
            ->latest()->paginate(10);
            if ($request->ajax()) {
                return view('backend.category_masters.pagination', compact('category_masters'))->render();
            }
            return view('backend.category_masters.index',compact('category_masters'));
        } catch (\Throwable $th) {
            Log::error('Admin login error: ' . $th->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }


    function create(){
        return view('backend.category_masters.create');
    }

    function edit($id){
        $category_master = CategoryMaster::find($id);
        return view('backend.category_masters.create',compact('category_master'));
    }

    function store(Request $request){
        CategoryMaster::updateOrCreate(['id' => $request->id],[
            'name' => $request->name,
            'type' => $request->type
        ]);
        return redirect()->route('admin.category_masters.index')->with('success','Catyegory Master Save Successfully');
    }


    function destroy (CategoryMaster $categoryMaster){
        session()->flash('success','Category delete successfully');
        $categoryMaster->delete();
    }
}
