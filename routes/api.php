<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get('/product-category/product-page-data/{slug}', [HomePageController::class, 'fetchProductData']);
