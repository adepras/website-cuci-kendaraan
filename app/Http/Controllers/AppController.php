<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    // Home
    public function home()
    {
        return view('home.home');
    }
    // Harga
    public function price()
    {
        return view('home.price');
    }
    // Tentang Kami
    public function about()
    {
        return view('home.about');
    }
    // Cuci Mobil
    public function menu()
    {
        return view('home.menu');
    }

    public function wash()
    {
        return view('home.wash');
    }
    // Detailing Mobil
    public function pack()
    {
        return view('home.pack');
    }
}
