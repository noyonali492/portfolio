<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index(){
        return view('dashboard.pricing.pricing');
    }

    public function addpricing(){
        return view('dashboard.pricing.pricingform');
    }

    public function savepricing(Request $Request){

        return $Request->all();

    }
}
