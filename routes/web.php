<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\CategoryController;
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
// Product
Route::get('/product-seller', [ProductController::class, 'sellerProductView'])->name('product.seller');
Route::post('/product-seller/add', [ProductController::class, 'sellerProductAdd'])->name('product.seller.add');
Route::put('/product-seller/edit/{id}', [ProductController::class, 'sellerProductEdit'])->name('product.seller.edit');
Route::delete('/product-seller/delete/{id}', [ProductController::class, 'sellerProductDelete'])->name('product.seller.delete');
// order
Route::get('/order-seller', [OrderController::class, 'sellerOrderView'])->name('order.seller');
Route::get('/transaction-seller', [TransactionController::class,'sellerTransactionView'])->name('transaction.seller');
Route::get('/profile-seller', [ProfileController::class, 'sellerProfileView'])->name('profile.seller');
Route::get('/cash-out-seller', [CashOutSellerController::class, 'index'])->name('cash-out.seller');
// End Seller

// Admin
Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->name('dashboard.admin');
Route::get('/product-admin', [ProductController::class, 'adminProductView'])->name('product.admin');
// Category
Route::get('/category-admin', [CategoryController::class, 'adminCategoryView'])->name('category.admin');
Route::post('/category-admin/add', [CategoryController::class, 'storeCategory'])->name('category.admin.add');
Route::get('/order-admin', [OrderController::class, 'adminOrderView'])->name('order.admin');
Route::get('/transaction-admin', [TransactionController::class,'adminTransactionView'])->name('transaction.admin');
Route::get('/seller-admin', [AdminController::class,'sellerView'])->name('seller.admin');
Route::get('/buyer-admin', [AdminController::class,'buyerView'])->name('buyer.admin');

// End Admin

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
