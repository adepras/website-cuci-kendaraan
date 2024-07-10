<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $testimonies = Testimoni::all(); // Mengambil semua data testimoni dari model Testimoni
         
        return view('home', compact('testimonies'));

    }
}
