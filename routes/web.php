<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuthController;

Route::get('/', function () {
    return view('welcome');
});

/**
 * TEST ROUTES
 */
Route::view('/example-page', 'example-page');
Route::view('/example-auth-page', 'example-auth');

/**
 * ADMIN ROUTES
 */
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware([])->group(function () {
        Route::controller(AuthController::class)->group(function () {
            Route::get('/login', 'loginForm')->name('login');
            Route::post('/login', 'loginHandler')->name('login_handler');
            Route::get('/forget-password', 'forgetForm')->name('forgot');
        });
    });

    Route::middleware([])->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/dashboard', 'adminDashboard')->name('dashboard');
        });
    });
});

/**
 * USER ROUTES
 */
Route::prefix('user')->name('user.')->group(function () {
    Route::middleware([])->group(function () {
        Route::controller(UserAuthController::class)->group(function () {
            Route::get('/login', 'userLoginForm')->name('login');
            Route::post('/login', 'userLoginHandler')->name('login_handler');
            Route::get('/register', 'userRegisterForm')->name('register');
            Route::get('/forget-password', 'userForgetForm')->name('forgot');
        });
    });

    // You can add additional user routes here, like dashboard, profile, etc.
    Route::middleware([])->group(function () {
        Route::controller(UserController::class)->group(function () {
            Route::get('/home', 'userHome')->name('home');
        });
    });
});
