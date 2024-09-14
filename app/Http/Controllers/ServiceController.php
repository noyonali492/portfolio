<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;
use DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = service::all();
        return view('dashboard.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->icon);
        $iconPic = $request->file('icon');
        $name = $iconPic->getClientOriginalName();
        $uploadPah = 'serviceIconPic/';
        $iconPic->move($uploadPah,$name);
        $imageUrl = $uploadPah.$name;
        //echo $imageUrl;
        $title = $request->title;
        $description = $request->description;
        $designation = $request->designation;
         DB::table('services')->insert(
             [
                 'icon' => $imageUrl,
                 'title' => $title,
                 'description' => $description,
                ]
         );
         return redirect('/service')->with('msg','Service Add successfully');
        // dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editservice = DB::table('services')->where('id',$id)->first();
        //dd($editHero);
        return view('dashboard.service.edit',['editservice'=>$editservice]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(service $service)
    {
        //
    }
}
