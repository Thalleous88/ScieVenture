<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthenticationController extends Controller
{
    function getRegister() {
        return view('register');
    }

    function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => ['required', 'unique:users'],
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => bcrypt($request->password)
            'password' => Hash::make($request->password)
        ]);

        return redirect('/welcome');
    }

    function getLogin() {
        return view('login');
    }

    function login(Request $request) {
        $request->validate([
            'user_id' => 'required',
            'password' => 'required'
        ]);

        $credentials = ([
            'user_id' => $request->user_id,
            'password' => $request->password
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Cookie::queue('user_id', Auth::user()->user_id);
            Log::info(Auth::user()->user_id.' is login.');
            return redirect('/');
        }

        return back()->withErrors([
            'user_id' => 'The provided credentials do not match our records.',
        ])->onlyInput('user_id');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login'); 
    }
}