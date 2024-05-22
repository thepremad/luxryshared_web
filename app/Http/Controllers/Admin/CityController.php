<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreCityRequest;
use App\Models\City;
use App\Traits\FileUploadTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CityController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::latest()->paginate(10);
        foreach ($cities as $key => $value) {
            $value->date = Carbon::parse($value->created_at)->format('d-m-y');
        }
        return view('backend.cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = new City();
        return view('backend.cities.create',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCityRequest $request)
    {
        try {
            $category = City::firstOrNew(['id' => $request->id]);
            $category->fill($request->all());
            $category->save();
            return response()->json(['status' => 200, 'message' => ' City Create Successfully ']);
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
        $cities = City::findOrFail($id);
        return view('backend.cities.create',compact('cities'));
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
            $cities = City::findOrFail($id)->delete();
            return response()->json(['status' => 200, 'message' => 'Delete City Successfully login!']);
        } catch (\Exception $exception) {
            Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }

    }
}
