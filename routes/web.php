<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Seller\CashOutSellerController;
use App\Http\Controllers\Seller\DashboardSellerController;
use App\Http\Controllers\TransactionController;
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
Route::get('/', [HomeController::class, 'wellcome'])->name('page');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/product', [ProductController::class, 'allProductView'])->name('product');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
// End Beranda

// Seller
Route::get('/dashboard-seller', [DashboardSellerController::class, 'index'])->name('dashboard.seller');
Route::get('/product-seller', [ProductController::class, 'sellerProductView'])->name('product.seller');
Route::get('/order-seller', [OrderController::class, 'sellerOrderView'])->name('order.seller');
Route::get('/transaction-seller', [TransactionController::class,'sellerTransactionView'])->name('transaction.seller');
Route::get('/profile-seller', [ProfileController::class, 'sellerProfileView'])->name('profile.seller');
Route::get('/cash-out-seller', [CashOutSellerController::class, 'index'])->name('cash-out.seller');
// End Seller

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
