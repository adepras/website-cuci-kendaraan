<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/Harga', [HomeController::class, 'price'])->name('price');
Route::get('/Tentang-Kami', [HomeController::class, 'about'])->name('about');
Route::get('/Detailing', [HomeController::class, 'pack'])->name('pack');

Route::get('/Menu-Layanan', [MenuController::class, 'menu'])->name('menu');
Route::get('/Satu-Kali-Cuci', [MenuController::class, 'menu1'])->name('menu1');
Route::get('/Salon-Mobil', [MenuController::class, 'menu2'])->name('menu2');
Route::get('/Paket-Super', [MenuController::class, 'menu3'])->name('menu3');