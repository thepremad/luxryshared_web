<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Delivery;
use App\Models\PrivacyPolicy;
use App\Models\TermsAndConditions;
use Illuminate\Http\Request;

class TermsAndConditionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $terms_and_condetions = TermsAndConditions::firstOrNew(['id' => $request->id]);
            $terms_and_condetions->fill($request->all());
            $terms_and_condetions->save();
            return response()->json(['status' => 200, 'message' => ' Terms And Condetions Create Successfully ']);
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
    public function edit( $id)
    {
        $terms_and_condetions = TermsAndConditions::findOrFail($id);
        return view('backend.terms-condetions.create',compact('terms_and_condetions'));
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
        //
    }
    public function delivry(){
        $deliveries = new Delivery();
        return view('backend.deliveries.create',compact('deliveries'));
    }
    public function saveDelivry(){

    }
    public function termsAndConditions(){
        $terms_and_condetions = TermsAndConditions::first();
        return view('backend.terms-condetions.create',compact('terms_and_condetions'));
    }
    public function saveTermsAndCondetions(){

    }
    public function privacyPolicies(){
        $privacy_policies =  PrivacyPolicy::first();
        return view('backend.privicy-policies.create',compact('privacy_policies'));
    }
    public function savePrivacty(Request $request){
        try {
            $terms_and_condetions = PrivacyPolicy::firstOrNew(['id' => $request->id]);
            $terms_and_condetions->fill($request->all());
            $terms_and_condetions->save();
            return response()->json(['status' => 200, 'message' => ' Privacy Policy Create Successfully ']);
        } catch (\Exception $exception) {
            \Log::error('Admin login error: ' . $exception->getMessage());
            return response()->json(['status' => 500, 'message' => 'Oops...Something went wrong! Please contact the support team.']);
        }
    }
}
