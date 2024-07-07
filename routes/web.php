<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

// Route untuk halaman home
Route::get('/', [AppController::class, 'home'])->name('home');

// Route untuk halaman about
Route::get('/about', [AppController::class, 'about'])->name('about');
