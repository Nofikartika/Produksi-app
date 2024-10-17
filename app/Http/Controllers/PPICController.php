<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPICController extends Controller
{
    public function dashboard()
    {
       return view('ppic.dashboard');
    }
}
