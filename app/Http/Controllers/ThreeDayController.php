<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreeDayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('threedaypackage');
    }

    public function book($packageName){
        $packages = [
            'cameron-highlands' => ['name' => 'CAMERON HIGHLANDS', 'price' => 550.00],
            'melaka' => ['name' => 'MELAKA', 'price' => 620.00],
            'tioman-island' => ['name' => 'TIOMAN ISLAND', 'price' => 675.00],
        ];

        if (!array_key_exists($packageName, $packages)) {
            abort(404);
        }

        session(['package' => $packages[$packageName]]);
        return redirect()->route('checkout');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
