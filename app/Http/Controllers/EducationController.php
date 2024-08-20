<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EducationController extends Controller
{
    public function index(){
        $educationlist =  DB::select('select * from resume_education');
        return view('dashboard.education.list',compact('educationlist'));
    }
    public function addeducation(){
        return view('dashboard.education.form');
    }
    public function saveeducation(Request $request){
        $skill_year = $request->skill_year;
        $designation = $request->designation;
        $discription = $request->discription;
        DB::table('resume_education')->insert(
            [
                'skill_year' => $skill_year,
                'discription' => $designation,
                'designation' => $discription
            ]
        );
        return redirect('/educationlist')->with('msg','Education Add successfully');
        //dd($Request);
    }

    public function editeducation($id){
        $editedu = DB::table('resume_education')->where('id',$id)->first();
        return view('dashboard.education.editform',['editedu'=>$editedu]);
    }

    public function updateeducation(Request $request){-
        dd($request);
    }
}
