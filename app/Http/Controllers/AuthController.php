<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         return redirect('/home');
    //     }

    //     return back()->withErrors(['email' => 'Invalid credentials']);
    // }

//     public function login(Request $request)
// {
//      return response("✅ Login POST route reached!", 200);
// }
public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect('/index'); // You can change this to any route you want
    }

    return back()->withErrors(['email' => 'Invalid credentials']);
}




    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success', 'Registered successfully!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
