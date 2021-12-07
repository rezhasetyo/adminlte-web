<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDF;

use App\Http\Controllers\CastController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\StaticTableController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\KritikController;
// use App\Http\Controllers\HomeController;

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
    // Route::get('/table', function () {
    //     return view('static/table');    
    // });
    Route::get('/table', [StaticTableController::class,'table']);
    Route::get('/data-table', [StaticTableController::class,'dataTable']);


// CAST
    Route::resource('/cast',CastController::class);

// PROFILE
    Route::resource('profile', ProfileController::class)->only([ 'index', 'update' ]);

// AUTHENTICATION DAN ROUTE HOME
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Auth::routes();

// FILM
    Route::resource('/film', FilmController::class);

// GENRE
    Route::resource('genre', GenreController::class)->only([ 'index', 'show' ]);

// KRITIK (film -> detail)
    Route::resource('kritik', KritikController::class)->only([ 'store']);

// LIBRARY PACKAGE
    Route::get('/library', [LibraryController::class,'index']);
    Route::get('/pdf', [LibraryController::class, 'createPDF']);
    Route::get('/qr', function () {
        return view('library/qrcode');
    });

