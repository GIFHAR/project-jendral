<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\GoogleSheetController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PricingController;
use Illuminate\Support\Facades\Mail;

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

// Route::get('/services', [App\Http\Controllers\HeaderController::class, 'services'])->name('services');

Route::get('/seafreight', [App\Http\Controllers\HeaderController::class, 'seafreight'])->name('seafreight');
Route::get('/airfreight', [App\Http\Controllers\HeaderController::class, 'airfreight'])->name('airfreight');
Route::get('/jasabelanja', [App\Http\Controllers\HeaderController::class, 'jasabelanja'])->name('jasabelanja');
Route::get('/rmbtransfer', [App\Http\Controllers\HeaderController::class, 'rmbtransfer'])->name('rmbtransfer');
Route::get('/d2d', [App\Http\Controllers\HeaderController::class, 'doortodoor'])->name('doortodoor');
Route::get('/konsultasi', [App\Http\Controllers\HeaderController::class, 'konsultasi'])->name('konsultasi');

// Route::get('/konsultasibisnis', [App\Http\Controllers\HeaderController::class, 'konsultasibisnis'])->name('konsultasibisnis');

// Route::get('/jasapembelian', [App\Http\Controllers\HeaderController::class, 'jasapembelian'])->name('jasapembelian');

// Route::get('/jasawarehouse', [App\Http\Controllers\HeaderController::class, 'jasawarehouse'])->name('jasawarehouse');

// Route::get('/jasapengiriman', [App\Http\Controllers\HeaderController::class, 'jasapengiriman'])->name('jasapengiriman');

// Route::get('/pricing', [App\Http\Controllers\HeaderController::class, 'pricing'])->name('pricing');

Route::match(['get', 'post'], '/calculatePricing', [App\Http\Controllers\HeaderController::class, 'pricing'])->name('calculatePricing');

Route::post('/calculateResult', [PricingController::class, 'calculate'])->name('calculateResult');

Route::get('/tracking', [App\Http\Controllers\HeaderController::class, 'tracking'])->name('tracking');

// Route::get('/pengirimanlaut', [App\Http\Controllers\HeaderController::class, 'pengirimanlaut'])->name('pengirimanlaut');

// Route::get('/pengirimanudara', [App\Http\Controllers\HeaderController::class, 'pengirimanudara'])->name('pengirimanudara');

Route::get('/contact', [App\Http\Controllers\HeaderController::class, 'contact'])->name('contact');

// Route for tracking orders
Route::get('/orders', [OrderController::class, 'index']);
// Route::get('/orders/{marking_code}', [OrderController::class, 'show']);
Route::get('/orders/{marking_code}', [OrderController::class, 'show'])
    ->where('marking_code', '.*');

// Route for submitting email
Route::post('/contact-form-submit', [ContactFormController::class, 'send'])->name('contact.submit');

Route::get('/import-data', [GoogleSheetController::class, 'importData']);