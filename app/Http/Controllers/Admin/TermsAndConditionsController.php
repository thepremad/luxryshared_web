<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Delivery;
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
        //
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
        //
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
        $terms_conditions = new TermsAndConditions();
        return view('backend.terms-condetions.create',compact('terms_conditions'));
    }
    public function saveTermsAndCondetions(){

    }
    public function privacyPolicies(){
        $privacy_policies = new TermsAndConditions();
        return view('backend.privicy-policies.create',compact('privacy_policies'));
    }
}
