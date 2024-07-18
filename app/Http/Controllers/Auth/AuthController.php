<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Alamat email perlu diisi.',
            'password.required' => 'Password perlu diisi.'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('home');
            }
        }

        return redirect()->back()->withErrors([
            'email' => 'Email dan Password yang dimasukan tidak sesuai'
        ])->withInput();
    }

    public function register(Request $request)
    {
        // Implementasi logika untuk registrasi pengguna
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('home.home');
    }
}
