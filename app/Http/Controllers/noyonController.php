<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class noyonController extends Controller
{
    public function mydashboard(){
        return view('dashboard.dashboard');
    }
}
