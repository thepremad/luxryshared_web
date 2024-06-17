<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Models\Blog;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $blogs =Blog::when($query_search, function ($query) use ($query_search) {
                $query->where('text', 'like', '%' . $query_search . '%');
            })
            ->latest()->paginate(10);
            if ($request->ajax()) {
                return view('backend.blogs.pagination', compact('blogs'))->render();
            }
            return view('backend.blogs.index',compact('blogs'));
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
        $blogs = new Blog();
        return view('backend.blogs.create',compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        try {
            $blogs = Blog::firstOrNew(['id' => $request->id]);
            $blogs->fill($request->all());
            if ($request->status == '1') {
                $blogs->status = Blog::$active;
            } else {
                $blogs->status = Blog::$in_active;
            }
            if ($file = $request->file('image')) {
                $folder = public_path('/uploads/blogs');
                $blogs->image = $this->uploadFile($file, $folder);
            }
            $blogs->save();
            return response()->json(['status' => 200, 'message' => ' Blog Create Successfully ']);
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
        $blogs = Blog::findOrFail($id);
        return view('backend.blogs.create',compact('blogs'));
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
            $blogs = Blog::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Blog Successfully login!']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }

    }
}
