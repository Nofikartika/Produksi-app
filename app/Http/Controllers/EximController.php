<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EximController extends Controller
{
     public function dashboard()
     {
        return view('exim.dashboard');
     }
}
