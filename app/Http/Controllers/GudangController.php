<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function dashboard()
    {
       return view('gudang.dashboard');
    }
}
