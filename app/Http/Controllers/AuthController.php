<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        if($request->isMethod('post')) {
            // TODO: Post method for login.
        }

        return view('auth.login');
    }

    public function register(Request $request)
    {
        if($request->isMethod('post')) {
            // TODO: Post method for register.
        }

        return view('auth.register');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Your now logged out.');
    }
}
