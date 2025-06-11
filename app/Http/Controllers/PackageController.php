<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PackageController;

class PackageController extends Controller
{
    public function index(){
        $packages = Package::sevenDay()->get();
        return view('package', compact('packages'));
        // return view('package');
    }

    public function book(Package $package){
        session(['package' => $package]);
        return redirect()->route('checkout');
    }
}
