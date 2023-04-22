<?php

// use App\Http\Controllers\dashboard\CategoryController;

use App\Http\Controllers\Dashboard\Client\OrderController;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\DashboardController;

use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\WelcomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
            Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

            Route::resource('users', UserController::class);

            Route::resource('categories', CategoryController::class);

            Route::resource('products', ProductController::class);

            Route::resource('clients', ClientController::class);
            Route::resource('clients.orders', OrderController::class);
        });
    }
);
