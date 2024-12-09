<?php

namespace App\Http\Controllers;

use App\Models\TestingDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestingDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $TestingDetails = testing_details::all();
        $TestingDetails = DB::table('testing_details')
            ->join('users', 'testing_details.userid', '=', 'users.id')
            ->join('products', 'testing_details.productid','=', 'products.id')
            ->join('testing_types', 'testing_details.testingtypeid', '=', 'testing_types.id')
            ->select('users.*', 'products.*', 'testing_types.TestingTypes','testing_details.trackingid','testing_details.status','testing_details.id')
            ->where('testing_details.status','pending')
            ->get();
         return view('Admin.TestingDetails', compact('TestingDetails'));
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

    public function approve($id){
        $testingDetails = TestingDetails::find($id);
        $testingDetails->status = "Approve";
        $testingDetails->update();
        return redirect()->back();
    }
    public function reject($id){
        $testingDetails = TestingDetails::find($id);
        $testingDetails->status = "Reject";
        $testingDetails->update();
        return redirect()->back();
    }

    public function testingapprove(){
    // $TestApprove = testing_details::all();
        $TestApprove = DB::table('testing_details')
          ->join('users', 'testing_details.userid', '=', 'users.id')
          ->join('products', 'testing_details.productid','=', 'products.id')
          ->join('testing_types', 'testing_details.testingtypeid', '=',
          'testing_types.id')
          ->select('users.*', 'products.*','testing_types.TestingTypes',
          'testing_details.trackingid','testing_details.status','testing_details.id')
          ->where('testing_details.status','Approve')
         ->get();
          return view ('Admin.ApproveTesting', compact('TestApprove'));
    }

    public function testingreject(){
     // $TestReject = testing_details::all();
         $TestReject = DB::table('testing_details')
         ->join('users', 'testing_details.userid', '=', 'users.id')
        ->join('products', 'testing_details.productid','=', 'products.id')
        ->join('testing_types', 'testing_details.testingtypeid', '=',
         'testing_types.id')
        ->select('users.*', 'products.*','testing_types.TestingTypes',
         'testing_details.trackingid','testing_details.status','testing_details.id')
         ->where('testing_details.status','Reject')
         ->get();
        return view ('Admin.RejectTesting', compact('TestReject'));
    }
}
