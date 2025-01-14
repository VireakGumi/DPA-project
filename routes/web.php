<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuthController;

/**
 * TEST ROUTES
 */
Route::view('/example-page', 'example-page');
Route::view('/example-auth-page', 'example-auth');

/**
 * ADMIN ROUTES
 */
Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware([])->group(function () { // Assuming you have auth middleware for admins
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
Route::controller(UserController::class)->group(function () {
    Route::get('/login', 'userLoginForm')->name('u.login');
    Route::post('/login', 'userLoginHandler')->name('u.login_handler');
    Route::get('/register', 'userRegisterForm')->name('u.register');
    Route::get('/forget-password', 'userForgetForm')->name('u.forgot');
    Route::get('/', 'userHome')->name('u.home');

    Route::get('/search', 'uSearch')->name('u.search');
});
