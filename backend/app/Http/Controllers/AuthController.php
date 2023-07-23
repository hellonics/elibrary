<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $redirectTo = '/';

    public function redirectTo()
    {
        return Auth::guard('password');

        return redirect('/login');}

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function authenticate(Request$request)
    {
        $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
        ]);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            return redirect('/home');
        };
        
    }
}
