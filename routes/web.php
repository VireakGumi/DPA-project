<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuthController;


/**
 * PUBLIC ROUTES
*/
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginForm')->name('login');
    Route::post('/login', 'LoginHandler')->name('login_handler'); // Changed name to avoid conflict
    Route::get('/register', 'RegisterForm')->name('register'); // Added unique name
    Route::get('/forget-password', 'ForgetForm')->name('forgot'); // Changed name to avoid conflict
});

/**
 * ADMIN ROUTES
*/
Route::prefix('admin')->name('admin.')->group(function () {
    // Protected routes for authenticated admins
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'adminDashboard')->name('dashboard')->middleware('login', 'admin');
    });
});

/**
 * USER ROUTES
*/
Route::controller(UserController::class)->group(function () {
    Route::get('/', 'userHome')->name('u.home'); // Added unique name
});
