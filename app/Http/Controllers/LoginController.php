<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        // var_dump(Hash::make('user123'));
        // dd();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('auth.dashboard');
        }

        // dd('login success');

        return back()->with('loginError', 'Login failed!!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
