<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchasingController extends Controller
{
    public function dashboard()
    {
       return view('purchasing.dashboard');
    }
}
