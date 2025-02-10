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
    Route::get('/login', 'loginForm')->name('login')->middleware('is.auth');
    Route::post('/login', 'LoginHandler')->name('login_handler'); // Changed name to avoid conflict
    Route::get('/register', 'RegisterForm')->name('register')->middleware('is.auth'); // Added unique name
    Route::post('/register', 'RegisterHandler')->name('register_handler'); // Added unique name
    Route::get('/forget-password', 'ForgetForm')->name('forgot')->middleware('is.auth'); // Changed name to avoid conflict
    Route::post('/logout',  'logout')->name('logout')->middleware('login'); //;
});

/**
 * ADMIN ROUTES
 */
Route::prefix('/admin')->name('admin.')->group(function () {
    // Protected routes for authenticated admins
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'adminDashboard')->name('dashboard')->middleware('login', 'admin');
        Route::get('/profile-edit', 'adminProfileEdit')->name('profile_edit')->middleware('login', 'admin');
    });
});

/**
 * USER ROUTES
 */
Route::controller(UserController::class)->group(function () {
    Route::get('/', 'userHome')->name('u.home'); // Added unique name
    Route::get('/search', 'uSearch')->name('u.search');

    // 404 route
    Route::get('/404', [UserController::class, 'notFound'])->name('404');
});
