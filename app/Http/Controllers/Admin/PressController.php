<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePressRequest;
use App\Models\Press;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class PressController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $presses =Press::when($query_search, function ($query) use ($query_search) {
                $query->where('text', 'like', '%' . $query_search . '%');
            })
            ->latest()->paginate(10);
            if ($request->ajax()) {
                return view('backend.presses.pagination', compact('presses'))->render();
            }
            return view('backend.presses.index',compact('presses'));
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
        $presses = new Press();
        return view('backend.presses.create',compact('presses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePressRequest $request)
    {
        try {
            $presses = Press::firstOrNew(['id' => $request->id]);
            $presses->fill($request->all());
            if ($request->status == '1') {
                $presses->status = Press::$active;
            } else {
                $presses->status = Press::$in_active;
            }
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/presses');
                $presses->image = $this->uploadFile($file, $folder);
            }
            $presses->save();
            return response()->json(['status' => 200, 'message' => ' Press Create Successfully ']);
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
        $presses = Press::findOrFail($id);
        return view('backend.presses.create',compact('presses'));
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
            $presses = Press::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Press Successfully login!']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }

    }
}
