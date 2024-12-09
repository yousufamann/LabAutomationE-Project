<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\TestingDetails;
use App\Models\TestingType;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = DB::select('SELECT products.*
           FROM products
         LEFT JOIN testing_details ON products.id = testing_details.productid
         WHERE testing_details.productid IS NULL;  ');
        return view('Admin.Products', compact('product'));
    }

    public function productrefresh()
    {
        $product = DB::select('SELECT products.*
        FROM products
      LEFT JOIN testing_details ON products.id = testing_details.productid
      WHERE testing_details.productid IS NULL;  ');
        return view('Admin.Products', compact('product'));
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
        $trackingid = $Trackingid = mt_rand(1000000000, 9999999999);
        $productname = $request->Product_Name;
        $productdescription = $request->Product_Description;
        $imagename = "";
        if ($request->hasFile('Product_Image')) {
            $imagename = time() . $request->Product_Image->getClientOriginalName();
            $request->Product_Image->move(public_path('ProductImages'), $imagename);
        }
        DB::select("INSERT INTO `products`(`Trackingid`, `ProductName`, `ProductDescription`,`ProductImage`) VALUES ('" . $trackingid . "','" . $productname . "','" . $productdescription . "','" . $imagename . "')");
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
        $product = Product::find($id);
        return view('Admin.Products', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateproducts(Request $request, $id)
    {
        $product = Product::find($id);
        $product->ProductName = $request->productname;
        $product->ProductDescription = $request->productdescription;
        $product->update();
        return redirect('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::select('DELETE FROM `products` WHERE id = "' . $id . '" ');
        return redirect()->back();
    }

    public function assignProduct($id)
    {
        $product = Product::find($id);
        $user = User::where('role', 'User')->get();
        $testingTypes = TestingType::all();
        return view('Admin.AssignProducts', compact('product', 'user', 'testingTypes'));
    }
    public function assignProductPost(Request $request, $id)
    {
        $tesingDetails = new TestingDetails();
        $tesingDetails->trackingid = $Trackingid = mt_rand(100000000000 , 999999999999);
        $tesingDetails->userid = $request->user;
        $tesingDetails->productid = $id;
        $tesingDetails->testingtypeid = $request->testingType;
        $tesingDetails->status = "pending";
        $tesingDetails->save();
        return redirect('testingdetails');
    }

    public function data_search(Request $request){
        $data = $request->input('search');
        $product = DB::table('products')
                    ->where('ProductName', 'like', '' . $data . '')
                    ->orWhere('Trackingid', 'like', '' . $data . '')
                    ->orWhere('ProductDescription', 'like', '' . $data . '')
                    // ->orwhere('products.id', 'Like', '' . $data . '')
                    ->get();
        return view('Admin.Products', compact('product'));
    }

}
