<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOccasionRequest;
use App\Models\Occasion;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class OccasionController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $occasion = Occasion::when($query_search, function ($query) use ($query_search) {
                $query->where('name', 'like', '%' . $query_search . '%');
            })
            ->latest()->paginate(10);

            if ($request->ajax()) {
                return view('backend.occasions.pagination', compact('occasion'))->render();
            }
            return view('backend.occasions.index',compact('occasion'));
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
        $occasion = new Occasion();
        return view('backend.occasions.create',compact('occasion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOccasionRequest $request)
    {
        try {
            $occasion = Occasion::firstOrNew(['id' => $request->id]);
            $occasion->fill($request->all());
            if ($request->status == '1') {
                $occasion->status = Occasion::$active;
            } else {
                $occasion->status = Occasion::$inActive;
            }
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/occasion');
                $occasion->image = $this->uploadFile($file, $folder);
            }
            $occasion->save();
            return response()->json(['status' => 200, 'message' => ' occasion Create Successfully ']);
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
        $occasion = Occasion::findOrFail($id);
        return view('backend.occasions.create',compact('occasion'));
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
            $occasion = Occasion::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Occasion Successfully login!']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
}
