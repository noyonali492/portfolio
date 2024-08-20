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
    
}
