<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/beranda', function () {
    // return 'Hello Word';
    return view('user.beranda');
});

Route::get('/tentang', function () {
    return view('user.tentang');
});

Route::get('/kerapan', function () {
    return view('user.kerapan');
});

Route::get('/kokocoran', function () {
    return view('user.kokocoran');
});

Route::get('/gendeng', function () {
    return view('user.gendeng');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

