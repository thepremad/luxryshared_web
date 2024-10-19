<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreFaqRequest;
use App\Models\Category;
use App\Models\CategoryMaster;
use App\Models\Faq;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $faqs = Faq::with('category')->when($query_search, function ($query) use ($query_search) {
                $query->where('title', 'like', '%' . $query_search . '%');
            })
            ->latest()->paginate(10);
            $faqs->getCollection()->transform(function ($item) {
                $item->newDate = Carbon::parse($item->date)->format('d-m-Y');
                return $item;
            });

            if ($request->ajax()) {
                return view('backend.faqs.pagination', compact('faqs'))->render();
            }
            return view('backend.faqs.index',compact('faqs'));
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
        $faqs = new Faq();
        $categories = CategoryMaster::where('type','faq')->get();
        return view('backend.faqs.create',compact('faqs','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        try {
            $faqs = Faq::firstOrNew(['id' => $request->id]);
            $faqs->fill($request->all());
            $faqs->save();
            return response()->json(['status' => 200, 'message' => ' Faq Create Successfully ']);
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
    public function edit(string $id)
    {
        $categories = CategoryMaster::where('type','faq')->get();
        $faqs = Faq::findOrFail($id);
        return view('backend.faqs.create',compact('faqs','categories'));
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
    public function destroy(string $id)
    {
        try {
            $faqs = Faq::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Faq Successfully login!']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
}
