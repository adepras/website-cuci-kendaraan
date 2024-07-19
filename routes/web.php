<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);

});

// Lupa Password
Route::get('forgot-password', [ForgotPasswordController::class, 'showForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu_layanan', [MenuController::class, 'menu'])->name('menu');
Route::get('/detailing', [HomeController::class, 'pack'])->name('pack');
Route::get('/harga', [HomeController::class, 'price'])->name('price');
Route::get('/tentang_kami', [HomeController::class, 'about'])->name('about');


Route::middleware(['auth'])->group(function () {
    // Profile dan Logout untuk User
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Menu Layanan Cuci Mobil
    Route::get('/satu_kali_cuci', [MenuController::class, 'menu1'])->name('menu1');
    Route::get('/salon_mobil', [MenuController::class, 'menu2'])->name('menu2');
    Route::get('/paket_super', [MenuController::class, 'menu3'])->name('menu3');

});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('dashboard');

});
