<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HeroController extends Controller
{
      public function index(){
        $herolist =  DB::select('select * from hero');
        return view('dashboard.hero.list',compact('herolist'));
    }
    public function addhero(){
        return view('dashboard.hero.form');
    }
     public function savehero(Request $request){

        $heroPic = $request->file('heropic');
        $name = $heroPic->getClientOriginalName();
        $uploadPah = 'heroPic/';
        $heroPic->move($uploadPah,$name);
        $imageUrl = $uploadPah.$name;
        //echo $imageUrl;
        $hello_text = $request->hello_text;
        $user_name = $request->user_name;
        $designation = $request->designation;
        $button_text = $request->button_text;
        $button_url = $request->button_url;
        //$image = $imageUrl;
         DB::table('hero')->insert(
             [
                 'hello_text' => $hello_text,
                 'user_name' => $user_name,
                 'designation' => $designation,
                 'button_text' => $button_text,
                 'button_url' => $button_url,
                 'image' => $imageUrl

             ]
         );
         return redirect('/herolist')->with('msg','Hero Add successfully');
        // dd($request);
     }


     public function editHero($id){

        $editHero = DB::table('hero')->where('id',$id)->first();
        //dd($editHero);
        return view('dashboard.hero.update',['editHero'=>$editHero]);
     }

     public function updateHero(Request $request){

        $heroPic = $request->file('heropic');
        $name = $heroPic->getClientOriginalName();
        $uploadPah = 'heroPic/';
        $heroPic->move($uploadPah,$name);
        $imageUrl = $uploadPah.$name;
        //echo $imageUrl;
        //dd($request->id);
        $id= $request->id;
        $hello_text = $request->hello_text;
        $user_name = $request->user_name;
        $designation = $request->designation;
        $button_text = $request->button_text;
        $button_url = $request->button_url;
        
        DB::table('hero')->where('id',$id)->update(
            [
                'hello_text' => $hello_text,
                'user_name' => $user_name,
                'designation' => $designation,
                'button_text' => $button_text,
                'button_url' => $button_url,
                'image' => $imageUrl

            ]
        );
        return redirect('/herolist')->with('msg','Hero Update successfully');
        
    }

    public function deleteHero(Request $request){
        dd($id);

        DB::table('hero')->where('id',$id)->delete();
        return response()->json([
            'status'=>'success',
        ]);
    }
    
}
