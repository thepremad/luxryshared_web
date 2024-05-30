<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('status',User::$approved)->where('email','!=','admin@gmail.com')->latest()->paginate(10);
        return view('backend.user-listing.users',compact('user'));
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
            $user = User::findOrFail($request->id);
            $user->fill($request->all())->save();
            return response()->json(['status' => 200, 'message' => ' User Update Successfully ']);
            
        } catch (\Throwable $th) {
            \Log::error('Admin login error: ' . $th->getMessage());
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
        $user = User::findOrFail($id);
        return view('backend.user-listing.edit',compact('user'));
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
        $user = User::findOrFail($id)->delete();
        return response()->json(['status' => 200, 'message' => ' User Delete Successfully ']);

    }
    public function approveRequest($id){
        $user = User::findOrFail($id);
        $user->status = User::$approved;
        $user->save();
        return response()->json(['status' => 200, 'message' => ' Approve Request Successfully ']);

    }
    public function rejectRequest($id){
        $user = User::findOrFail($id);
        $user->status = User::$rejected;
        $user->save();
        return redirect()->back();

    }
    public function registerRequest(){
        $user = User::where('status',User::$pending)->where('email','!=','admin@gmail.com')->latest()->paginate(10);
        return view('backend.user-listing.index',compact('user'));
    }
 
}
