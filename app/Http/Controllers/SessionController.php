<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function create()
    {
        //
        return view('login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]); 

        //Auth::attempt($credentials);
        //request()->session()->regenerate();

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();
            return redirect()->intended('dashboard')->withSuccess('You have Successfully loggedin');
        }
        //return redirect("login")->withError('Oppes! You have entered invalid credentials');
        return redirect('login')->with('Oppes! You have entered invalid credentials');
        //return redirect('/dashboard');
        //return redirect()->intended('dashboard');
    }

    public function index()
    {
        //
        return view('dashboard');
    }
    
}
