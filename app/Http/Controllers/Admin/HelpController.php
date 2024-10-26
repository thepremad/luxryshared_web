<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHelpRequest;
use App\Models\Category;
use App\Models\CategoryMaster;
use App\Models\Help;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $helps = Help::with('category')->when($query_search, function ($query) use ($query_search) {
                $query->where('title', 'like', '%' . $query_search . '%');
            })
            ->latest()->paginate(10);
            $helps->getCollection()->transform(function ($item) {
                $item->newDate = Carbon::parse($item->date)->format('d-m-Y');
                return $item;
            });

            if ($request->ajax()) {
                return view('backend.helps.pagination', compact('helps'))->render();
            }
            return view('backend.helps.index',compact('helps'));
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
        $helps = new Help();
        $categories = CategoryMaster::where('type','help')->get();
        return view('backend.helps.create',compact('helps','categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHelpRequest $request)
    {
        try {
            $helps = Help::firstOrNew(['id' => $request->id]);
            $helps->fill($request->all());
            $helps->save();
            return response()->json(['status' => 200, 'message' => ' Help Create Successfully ']);
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
        $categories = CategoryMaster::where('type','help')->get();
        $helps = Help::findOrFail($id);
        return view('backend.helps.create',compact('helps','categories'));
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
            $helps = Help::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Help Successfully login!']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
}
