<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        return view('profile.show', compact('user'));
    }
}
    // public function show()
    // {
    //     if (Auth::user()->role == 'admin') {
    //         return view('admin.index');
    //     }
    //     return view('profile.show');
    // }
