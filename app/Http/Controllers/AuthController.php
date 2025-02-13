<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AuthModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Cek apakah email sudah terdaftar di database
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->with('error', 'Email belum terdaftar');
        }

        // Cek apakah password cocok
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('books.index')->with('success', 'Logged in successfully');
        }

        return back()->with('error', 'Invalid credentials');
    }


    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ], [
            'email.unique' => 'Email udah terdaftar',
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration successful');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logged out successfully');
    }
}
