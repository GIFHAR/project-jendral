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
    return view('pages/landing-page/index-revisi', [
        'title' => 'Home'
    ]);
});

Route::get('/home', [App\Http\Controllers\PageController::class, 'home'])->name('home');
Route::get('/about-us', [App\Http\Controllers\PageController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\PageController::class, 'services'])->name('services');
Route::get('/pricing', [App\Http\Controllers\PageController::class, 'pricing'])->name('pricing');
Route::post('/submit-pricing', [App\Http\Controllers\PageController::class, 'submitPricing'])->name('submit.pricing');
Route::get('/tracking', [App\Http\Controllers\PageController::class, 'tracking'])->name('tracking');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');


// Route::get('/aboutus', [App\Http\Controllers\PageController::class, 'aboutus'])->name('aboutus');
// Route::get('/konsultasibisnis', [App\Http\Controllers\PageController::class, 'konsultasibisnis'])->name('konsultasibisnis');
// Route::get('/jasapembelian', [App\Http\Controllers\PageController::class, 'jasapembelian'])->name('jasapembelian');
// Route::get('/jasawarehouse', [App\Http\Controllers\PageController::class, 'jasawarehouse'])->name('jasawarehouse');
// Route::get('/jasapengiriman', [App\Http\Controllers\PageController::class, 'jasapengiriman'])->name('jasapengiriman');
// Route::get('/pengirimanlaut', [App\Http\Controllers\PageController::class, 'pengirimanlaut'])->name('pengirimanlaut');
// Route::get('/pengirimanudara', [App\Http\Controllers\PageController::class, 'pengirimanudara'])->name('pengirimanudara');

