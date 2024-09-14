<?php

namespace App\Http\Controllers;

use App\Models\package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('dashboard.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       // dd($request->name);
        // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'duration' => 'required|string|max:100',
        'features' => 'nullable|array',
        'features.*' => 'nullable|string',
    ]);

    // Convert features array to a single string
    if (isset($validatedData['features'])) {
        $validatedData['features'] = implode(', ', $validatedData['features']);
    }

    // Create the package without user_id
    Package::creatFlashere($validatedData);
// Flash success message using PHP 
    flash()->addSuccess('Package updated successfully.');
    return redirect()->route('package');
    }

    /**
     * Display the specified resource.
     */
    public function show(package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(package $package)
    {
        //
    }
}
