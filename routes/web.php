<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDF;

use App\Http\Controllers\CastController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// TABEL STATIS
    Route::get('/table', function () {
        return view('static/table');
    });
    Route::get('/data-table', function () {
        return view('static/data-table');
    });

// CRUD AWAL (ELOQUENT)
    Route::resource('/cast', App\Http\Controllers\CastController::class);

// CRUD QUERY BUILDER
    // Route::get('/profile', [ProfileController::class,'index']);
    Route::get('/profile/create', [ProfileController::class,'create']);
    Route::post('/profile/store', [ProfileController::class, 'store']);
    // Route::get('/profile/{id}', [ProfileController::class,'show']);
    // Route::get('/profile/{id}/edit', [ProfileController::class,'edit']);
    // Route::put('/profile/{id}/update', [ProfileController::class,'update']);
    // Route::delete('/profile/{id}/delete', [ProfileController::class,'delete']);

// AUTHENTICATION DAN ROUTE HOME
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Auth::routes();

// CRUD UPLOAD IMAGE
    Route::resource('/film', App\Http\Controllers\FilmController::class);

// LIBRARY PACKAGE
    // 1. DOMPDF
    Route::get('/genre', [GenreController::class,'index']);
    Route::get('/pdf', [GenreController::class, 'createPDF']);
    Route::get('/qr', function () {
        return view('library/qrcode');
    });

