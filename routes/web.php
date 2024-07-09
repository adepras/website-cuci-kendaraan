<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'home'])->name('home');
Route::get('/price', [AppController::class, 'price'])->name('price');
Route::get('/about', [AppController::class, 'about'])->name('about');