<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/shop', [HomeController::class, 'showShop'])->name('shop.show');
Route::get('/productdetails/{product}', [HomeController::class, 'showProductDetails'])->name('shop.product.detail');
Route::get('/about', [HomeController::class, 'showAboutUs'])->name('aboutUs');
Route::get('/faq', [HomeController::class, 'showFaq'])->name('faq');
Route::get('/contact', [HomeController::class, 'showContact'])->name('contact');
Route::get('/wishlist', [HomeController::class, 'showWishlist'])->name('wishlist');
Route::get('/orders', [HomeController::class, 'showOrders'])->name('orders');
Route::get('/address', [HomeController::class, 'showAddress'])->name('address');
Route::get('/accountdetails', [HomeController::class, 'showAccountdetails'])->name('accountdetails');


Route::get('/redirect', [HomeController::class, 'redirect'])->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pages/createproduct', [AdminController::class, 'createproduct'])->name('admin.createproduct');
    Route::post('/admin/createproduct', [AdminController::class, 'storeProduct'])->name('admin.storeProduct');
    Route::get('/admin/deleteproduct/{product}', [AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
    Route::get('/admin/deletecustomer/{customer}', [AdminController::class, 'deleteCustomer'])->name('admin.deleteCustomer');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pages/products', [AdminController::class, 'showproducts'])->name('admin.products');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pages/productdetails/{product}', [AdminController::class, 'showproductdetails'])->name('admin.productdetails');
});
Route::middleware(['auth', 'role:admin'])->group(function () {});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pages/orders', [AdminController::class, 'showorder'])->name('admin.orders');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/pages/customers', [AdminController::class, 'showcustomers'])->name('admin.customers');
});

Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'dashboard'])->name('agent.dashboard');
});

require __DIR__.'/auth.php';
