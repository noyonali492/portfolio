<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use Illuminate\Http\Request;
use DB;

class fontendController extends Controller
{
    public function index(){
        $herolists =  DB::select('select * from hero');

        $resume_expertise =  DB::select('select * from resume_expertise');
        $educationlists =  DB::select('select * from resume_education');
        
       // dd($herolist->hello_text);
        return view('welcome', compact('herolists','resume_expertise','educationlists'));


    }
}
