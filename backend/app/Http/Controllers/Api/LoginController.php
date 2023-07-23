<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['require', 'email'],
            'password' => ['require'],
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(
            ['email' => 'Wrong email']
            
        )->onlyInput('email');
    }

    public function store(Request$request){
        $request->validate([
            'email'=> 'require|unique:users',
            'name'=> 'require',
            'password'=> 'require|unique:8'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }

        return redirect('/');
    }


}
