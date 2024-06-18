<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComunityRequest;
use App\Models\Comunity;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class ComunityController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $comunities =Comunity::when($query_search, function ($query) use ($query_search) {
                $query->where('text', 'like', '%' . $query_search . '%');
            })
            ->latest()->paginate(10);
            if ($request->ajax()) {
                return view('backend.comunities.pagination', compact('comunities'))->render();
            }
            return view('backend.comunities.index',compact('comunities'));
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
        $comunities = new Comunity();
        return view('backend.comunities.create',compact('comunities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComunityRequest $request)
    {
        try {
            $comunities = Comunity::firstOrNew(['id' => $request->id]);
            $comunities->fill($request->all());
            if ($request->status == '1') {
                $comunities->status = Comunity::$active;
            } else {
                $comunities->status = Comunity::$in_active;
            }
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/comunities');
                $comunities->image = $this->uploadFile($file, $folder);
            }
            $comunities->save();
            return response()->json(['status' => 200, 'message' => ' Comunity Create Successfully ']);
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
        $comunities = Comunity::findOrFail($id);
        return view('backend.comunities.create',compact('comunities'));
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
            $comunities = Comunity::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Comunity Successfully login!']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }

    }
}
