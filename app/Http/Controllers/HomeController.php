<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home
    public function index()
    {
        $testimoni = Testimoni::all();

        return view('home.home', compact('testimoni'));
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
    // Detailing Mobil
    public function pack()
    {
        return view('home.pack');
    }
}
