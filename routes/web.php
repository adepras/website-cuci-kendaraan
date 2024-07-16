<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/price', [AppController::class, 'price'])->name('price');
Route::get('/about', [AppController::class, 'about'])->name('about');

Route::get('/menu', [AppController::class, 'menu'])->name('menu');
Route::get('/detailing', [AppController::class, 'pack'])->name('pack');
