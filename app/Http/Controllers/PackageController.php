<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PackageController;

class PackageController extends Controller
{
    public function index(){
        return view('package');
    }

    public function book($packageName){
        // In a real app, you'd fetch this from database
        $packages = [
            'pangkor' => ['name' => 'PANGKOR', 'price' => 2400.00],
            'penang' => ['name' => 'PENANG', 'price' => 1000.00],
            'langkawi' => ['name' => 'LANGKAWI', 'price' => 1375.00],
        ];

        if (!array_key_exists($packageName, $packages)) {
            abort(404);
        }

        session(['package' => $packages[$packageName]]);
        return redirect()->route('checkout');
    }
}
