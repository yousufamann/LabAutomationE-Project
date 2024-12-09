<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        if (Auth::user()->status == "Active") {
            if (Auth::user()->role == "Admin") {
                return view('Admin.Index');
            } else {
                return redirect('/');
            }
        } else {
            return redirect()->back();
        }
    }
}
