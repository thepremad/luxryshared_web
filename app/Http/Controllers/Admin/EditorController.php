<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Editor;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class EditorController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $looks = Editor::with('products')->when($query_search, function ($query) use ($query_search) {
                $query->where('name', 'like', '%' . $query_search . '%');
            })
            ->latest()->paginate(10);
            if ($request->ajax()) {
                return view('backend.editor.pagination', compact('looks'))->render();
            }
            return view('backend.editor.index',compact('looks'));
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
        $looks = new Editor();
        $product = Item::get();
        return view('backend.editor.create',compact('looks','product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' =>'required',
                'product_id' => 'required'
            ]);
            $looks = Editor::firstOrNew(['id' => $request->id]);
            $looksCount = Editor::count();
            // if ($looksCount >= 6) {
            // return response()->json(['status' => 420, 'message' => ' You Can Add Only 6 get and look']);
                
            // }
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
        $looks = Editor::findOrFail($id);
        $product = Item::get();
        return view('backend.editor.create',compact('looks','product'));
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
            $looks = Editor::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Category Successfully ']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }

} 
