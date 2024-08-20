<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ExpertiseController extends Controller
{
    public function index(){
        $expertiselist =  DB::select('select * from resume_expertise');
        return view('dashboard.expertise.list',compact('expertiselist'));
    }
    public function addexpertise(){
        return view('dashboard.expertise.form');
    }
    public function saveexpertise(Request $request){
        $skill_year = $request->skill_year;
        $designation = $request->designation;
        $discription = $request->discription;
        DB::table('resume_expertise')->insert(
            [
                'skill_year' => $skill_year,
                'discription' => $designation,
                'designation' => $discription

            ]
        );
        return redirect('/expertiselist')->with('msg','Expertise Add successfully');
        //dd($Request);
    }
    

}
