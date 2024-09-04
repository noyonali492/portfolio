<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PricingController extends Controller
{
    public function index(){
        $package_features =  DB::select('select * from pricing ');

       return view('dashboard.pricing.pricing',compact('package_features'));

       
    }

    public function addpricing(){
        return view('dashboard.pricing.pricingform');
    }

    public function savepricing(Request $Request){

        $feature = serialize ($Request->field_name);

        DB::table('pricing')->insert(
            [
                'package_feature' => $feature,

            ]
        );
        return redirect('/pricinglist')->with('msg','Hero Add successfully');
        

    }
}
