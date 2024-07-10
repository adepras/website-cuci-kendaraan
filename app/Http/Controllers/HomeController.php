<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::all();

        return view('home.home', compact('testimoni'));
    }
}
