<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('LandingPageRevisi');
});



Route::get('/home', [App\Http\Controllers\HeaderController::class, 'home'])->name('home');

// Route::get('/aboutus', [App\Http\Controllers\HeaderController::class, 'aboutus'])->name('aboutus');

Route::get('/services', [App\Http\Controllers\HeaderController::class, 'services'])->name('services');

// Route::get('/konsultasibisnis', [App\Http\Controllers\HeaderController::class, 'konsultasibisnis'])->name('konsultasibisnis');

// Route::get('/jasapembelian', [App\Http\Controllers\HeaderController::class, 'jasapembelian'])->name('jasapembelian');

// Route::get('/jasawarehouse', [App\Http\Controllers\HeaderController::class, 'jasawarehouse'])->name('jasawarehouse');

// Route::get('/jasapengiriman', [App\Http\Controllers\HeaderController::class, 'jasapengiriman'])->name('jasapengiriman');

Route::get('/pricing', [App\Http\Controllers\HeaderController::class, 'pricing'])->name('pricing');

Route::get('/tracking', [App\Http\Controllers\HeaderController::class, 'tracking'])->name('tracking');

// Route::get('/pengirimanlaut', [App\Http\Controllers\HeaderController::class, 'pengirimanlaut'])->name('pengirimanlaut');

// Route::get('/pengirimanudara', [App\Http\Controllers\HeaderController::class, 'pengirimanudara'])->name('pengirimanudara');

Route::get('/contact', [App\Http\Controllers\HeaderController::class, 'contact'])->name('contact');
