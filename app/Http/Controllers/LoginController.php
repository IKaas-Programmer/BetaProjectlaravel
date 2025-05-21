<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }
}