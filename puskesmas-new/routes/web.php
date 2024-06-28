<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use App\Models\Kelurahan;
use App\Models\Pasien;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('dashboard')->group(function() {

        Route::get('/', [AdminController::class, 'index']);

        // Kelurahan
        Route::prefix('kelurahan')->group(function(){

            // Pratikum laravel 3
            Route::get('/', [KelurahanController::class, 'index']);
            
            // Pratikum Laravel 4
            Route::get('/create', [KelurahanController::class, 'create'])->middleware('admin');
            Route::post('/store', [KelurahanController::class, 'store']);
            Route::get('/show/{id}', [KelurahanController::class, 'show']);
            
            
            // pratikum Larvel 5
            Route::get('/edit/{id}', [KelurahanController::class, 'edit'])->middleware('admin');
            Route::put('/update/{id}', [KelurahanController::class, 'update']);
            Route::delete('/destroy/{id}', [KelurahanController::class, 'destroy'])->middleware('admin');


        });
        Route::middleware('admin')->prefix('pasien')->group(function(){

            //pasien
            Route::get('/', [PasienController::class, 'index']);
            Route::get('/create', [PasienController::class, 'create']);
            Route::post('/store', [PasienController::class, 'store']);
            Route::get('/show/{id}', [PasienController::class, 'show']);
            
            Route::get('/edit/{id}', [PasienController::class, 'edit']);
            Route::put('/update/{id}', [PasienController::class, 'update']);
            Route::delete('/destroy/{id}', [PasienController::class, 'destroy']);

        });
    });




});

require __DIR__.'/auth.php';

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

// Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

