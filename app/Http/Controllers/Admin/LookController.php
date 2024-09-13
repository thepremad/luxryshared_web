<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLookRequest;
use App\Models\Item;
use App\Models\Look;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class LookController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $looks = Look::with('products')->when($query_search, function ($query) use ($query_search) {
                $query->where('name', 'like', '%' . $query_search . '%');
            })
            ->latest()->paginate(10);
            if ($request->ajax()) {
                return view('backend.looks.pagination', compact('looks'))->render();
            }
            return view('backend.looks.index',compact('looks'));
        } catch (\Throwable $th) {
            \Log::error('Admin login error: ' . $th->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $looks = new Look();
        $product = Item::get();
        return view('backend.looks.create',compact('looks','product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLookRequest $request)
    {
        try {
            $looks = Look::firstOrNew(['id' => $request->id]);
            $looksCount = Look::count();
            if ($looksCount >= 6) {
            return response()->json(['status' => 420, 'message' => ' You Can Add Only 6 get and look']);
                
            }
            $looks->fill($request->all());
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/looks');
                $looks->image = $this->uploadFile($file, $folder);
            }
            $looks->save();
            return response()->json(['status' => 200, 'message' => ' look Create Successfully ']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $looks = Look::findOrFail($id);
        $product = Item::get();
        return view('backend.looks.create',compact('looks','product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $looks = Look::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Category Successfully ']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
  
}
