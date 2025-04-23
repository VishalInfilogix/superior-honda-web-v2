<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return "Cache, Config, Routes, and Views Cleared!";
});

Route::get('/', [HomePageController::class, 'homepage'])->name('homepage');
Route::get('/contact-us', [HomePageController::class, 'contactUs'])->name('contact_us');

Route::get('/product-category/{slug}', [HomePageController::class, 'products_page'])->name('products_page');

Route::get('/product-category/product-page-data/{slug}', [HomePageController::class, 'fetchProductData'])->name('products_category_page');

Route::post('/create-enquiry', [HomePageController::class, 'create_enquiry'])->name('create_enquiry');

Route::get('/search-products', [HomePageController::class, 'searchProducts'])->name('search_products');

Route::post('/customer-login', [AuthController::class, 'customer_login'])->middleware('web')->name('customer.login');

Route::post('/customer-register', [AuthController::class, 'customer_register'])->name('customer.register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/products', function () {
    return view('productsOld');
});


Route::get('/product-category/{cat}/{product}', [HomePageController::class, 'product_details'])->name('product-details');
Route::get('/product-details', [HomePageController::class, 'product_details'])->name('product-details');