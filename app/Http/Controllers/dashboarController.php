<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboarController extends Controller
{
    public function mydashboard(){
        return view('dashboard.dashboard');
    }

    public function form(){
        return view('dashboard.pages.form');
    }
    public function register(){
        return view('dashboard.pages.register');
    }
}
