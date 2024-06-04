<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEditUserRequest;
use App\Models\User;
use DataTables;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            if ($request->ajax()) {
                $user = new User();
                $data = $user->latest()->get();
                dd($data);
                return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {
                        $actionBtn = '<a href="' . route('admin.user.edit', $row->id) . '" class="btn btn-sm btn-text-secondary rounded-pill btn-icon item-edit"><i class="mdi mdi-pencil-outline"></i></a>                    
                    <div class="d-inline-block">
                    <a href="javascript:;" class="btn btn-sm btn-text-secondary rounded-pill btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                  
                    <div class="dropdown-divider"></div><li><a href="javascript:;" class="dropdown-item text-danger delete-record" data-id="' . $row->id . '">Delete</a></li></ul></div>';
                        return $actionBtn;
                    })
                    
                    ->rawColumns(['action'])
                    ->make(true);
            }
            return view('backend.user-listing.index');
        } catch (\Exception $exception) {
            createLog('City list : exception');
            createLog($exception);
            return response()->json(['status' => 500, 'message' => 'Something went wrong!']);
        }
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
    public function store(StoreEditUserRequest $request)
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
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('backend.user-listing.profile',compact('user'));
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
        $user = User::where('email','!=','admin@gmail.com')->latest()->paginate(10);
        return view('backend.user-listing.index',compact('user'));
    }
    public function userSerach(Request $request){
        $user = User::where('first_name', 'LIKE', "%{$request->val}%")
            ->orWhere('email', 'LIKE', "%{$request->val}%")
            ->orWhere('number', 'LIKE', "%{$request->val}%")
            ->orWhere('last_name', 'LIKE', "%{$request->val}%")
            ->get();
            return response()->json(['status' =>200,'data' => $user]);
    }
 
}
