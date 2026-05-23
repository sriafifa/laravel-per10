<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;

// Rute umum non-autentikasi
Route::view('/', 'welcome');
Route::view('/beranda', 'user.beranda');
Route::view('/tentang', 'user.tentang');

// Autentikasi bawaan Laravel UI
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rute Group untuk Admin (Hanya boleh diakses oleh user yang sudah login)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Halaman Utama Dashboard
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');

    // CRUD Pengguna, Kategori & Berita
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('articles', ArticleController::class);
});
