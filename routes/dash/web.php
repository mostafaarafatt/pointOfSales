<?php

// use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;

use App\Http\Controllers\Dashboard\UserController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
            Route::get('/index', [DashboardController::class, 'index'])->name('index');
            Route::resource('users', UserController::class);
            Route::resource('categories', CategoryController::class);
            Route::resource('products', ProductController::class);
        });
    }
);
