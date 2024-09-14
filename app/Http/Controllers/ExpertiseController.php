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

    public function editexpertise($id){
        $editexpertise = DB::table('resume_expertise')->where('id',$id)->first();
        return view('dashboard.expertise.update',['editexpertise'=>$editexpertise]);
     }

     public function updateexpertise(Request $request){
        $skill_year = $request->skill_year;
        $designation = $request->designation;
        $discription = $request->discription;
        $id=$request->id;
        DB::table('resume_expertise')->where('id',$id)->update(
            [
                'skill_year' => $skill_year,
                'discription' => $designation,
                'designation' => $discription

            ]
        );
        return redirect('/expertiselist')->with('msg','Expertise Update successfully');
     }

     public function deleteexpertise($id){
        DB::table('resume_expertise')->where('id',$id)->delete();
        return redirect('/expertiselist')->with('msg','Expertise Delete successfully');
     }
    

}
