<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreCountryRequest;
use App\Models\Country;
use App\Traits\FileUploadTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CountryController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $query_search = $request->input('search');
            $countries =Country::when($query_search, function ($query) use ($query_search) {
                $query->where('name', 'like', '%' . $query_search . '%');
            })
            ->latest()->paginate(10);
            if ($request->ajax()) {
                return view('backend.countries.pagination', compact('countries'))->render();
            }
            return view('backend.countries.index',compact('countries'));
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
        $countries = new Country();
        return view('backend.countries.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        try {
            $category = Country::firstOrNew(['id' => $request->id]);
            $category->fill($request->all());
            if ($request->status == '1') {
                $category->status = Country::$active;
            } else {
                $category->status = Country::$in_active;

            }
            $category->save();
            return response()->json(['status' => 200, 'message' => ' Country Create Successfully ']);
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
        $countries = Country::findOrFail($id);
        return view('backend.countries.create',compact('countries'));
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
            $countries = Country::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete Country Successfully login!']);
        } catch (\Exception $exception) {
            Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }

    }
}
