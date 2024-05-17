<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('Halaman Beranda');
});

Route::get('/salam', function () {
    return view('Selamat Datang Hilmi di Laravel 11');
});


Route::get('/profile', function () {
    return view('Halaman Profile');
});

// Pratikum laravel 2

Route::get('/dashbord', [AdminController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('about', [AboutController::class, 'index']);