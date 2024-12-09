<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TestingType;

class TestingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $TestingTypes = DB::select('SELECT * FROM `testing_types`');
        return view('Admin.TestingTypes', compact('TestingTypes'));
    }

    public function testingrefresh()
    {
        $TestingTypes = DB::select('SELECT * FROM `testing_types`');
        return view('Admin.TestingTypes', compact('TestingTypes'));
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
        $testingtypes = $request->Testing_Type;
        $description = $request->TestingType_Description;
        $ImageName = "";
        if ($request->hasfile('TestingType_Image')) {
            $ImageName = time() . $request->TestingType_Image->getClientOriginalName();
            $request->TestingType_Image->move(public_path('Testing_TypeImage'), $ImageName);
        }
        DB::select("INSERT INTO `testing_types`( `TestingTypes`, `Description`,`TestingTypeImages`) VALUES ('" . $testingtypes . "','" . $description . "', '" . $ImageName . "')");
        return redirect()->back();
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
        $data = TestingType::find($id);
        return view('Admin.TestingTypes', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatetestingtypes(Request $request, string $id)
    {
        $data = TestingType::find($id);
        $data->TestingTypes = $request->Testing_Types;
        $data->Description = $request->TestingTypes_Description;
        $data->update();
        return redirect('testingtypes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testing = TestingType::find($id);
        $testing->delete();
        return redirect()->back();
    }

    public function testing_search(Request $request)
    {
        $data = $request->input('search');
        $TestingTypes = DB::table('testing_types')
        ->where('testing_types.id', 'Like', '' . $data . '')
        ->orWhere('TestingTypes', 'Like', '' . $data . '')
        ->orwhere('Description', 'Like', '' . $data . '')->get();
        return view('Admin.TestingTypes', compact('TestingTypes'));
    }
}
