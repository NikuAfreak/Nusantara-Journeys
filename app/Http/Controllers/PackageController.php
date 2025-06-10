<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PackageController;

class PackageController extends Controller
{
    public function index(){
        return view('package');
    }
}
