<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home()
    {
        return view('home.home');
    }

    public function price()
    {
        return view('home.price');
    }

    public function about()
    {
        return view('home.about');
    }
}
