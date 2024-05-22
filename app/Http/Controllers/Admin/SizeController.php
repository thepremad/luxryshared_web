<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreSizeRequest;
use App\Models\Size;
use App\Traits\FileUploadTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::latest()->paginate(10);
        foreach ($sizes as $key => $value) {
            $value->date = Carbon::parse($value->created_at)->format('d-m-y');
        }
        return view('backend.sizes.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sizes = new Size();
        return view('backend.sizes.create',compact('sizes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSizeRequest $request)
    {
        try {
            $category = Size::firstOrNew(['id' => $request->id]);
            $category->fill($request->all());
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/category');
                $category->image = $this->uploadFile($file, $folder);
            }
            $category->save();
            return response()->json(['status' => 200, 'message' => ' Size Create Successfully ']);
        } catch (\Exception $exception) {
            Log::error('Admin login error: ' . $exception->getMessage());
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
        $sizes = Size::findOrFail($id);
        return view('backend.sizes.create',compact('sizes'));
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
            $sizes = Size::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Size Successfully login!']);
        } catch (\Exception $exception) {
            Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }

    }
}
