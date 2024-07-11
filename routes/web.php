<?php

use Illuminate\Support\Facades\Auth;
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
// Beranda
Route::get('/', function () {
    return view('welcome');
})->name('page');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// End Beranda

// Seller
Route::get('/dashboard-seller', function () {
    return view('seller.dashboard');
})->name('dashboard.seller');
// End Seller

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
