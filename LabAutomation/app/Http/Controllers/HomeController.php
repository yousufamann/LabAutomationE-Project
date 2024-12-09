<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home.Index');
    }

    public function about()
    {
        return view('Home.About');
    }

    public function test()
    {
        return view('Home.Test');
    }

    public function contact()
    {
        return view('Home.Contact');
    }

    public function product()
    {
        return view('Home.Product');
    }
}
