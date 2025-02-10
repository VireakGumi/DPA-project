<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserAuthController;



/**
 * ADMIN ROUTES
 */
Route::prefix('/admin')->name('admin.')->group(function () {
    // Protected routes for authenticated admins
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('dashboard')->middleware('login', 'admin');
    Route::get('/profile-edit', [AdminController::class, 'adminProfileEdit'])->name('profile_edit')->middleware('login', 'admin');
});

/**
 * USER ROUTES
 */
Route::prefix('/')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login')->middleware('is.auth');
    Route::post('/login', [AuthController::class, 'LoginHandler'])->name('login_handler'); // Changed name to avoid conflict
    Route::get('/register', [AuthController::class,'RegisterForm'])->name('register')->middleware('is.auth'); // Added unique name
    Route::post('/register', [AuthController::class, 'RegisterHandler'])->name('register_handler'); // Added unique name
    Route::get('/forget-password', [AuthController::class, 'ForgetForm'])->name('forgot')->middleware('is.auth'); // Changed name to avoid conflict
    Route::post('/logout',  [AuthController::class, 'logout'])->name('logout')->middleware('login'); //;


    Route::get('/', [UserController::class, 'userHome'])->name('u.home');
    Route::get('/search', [UserController::class, 'uSearch'])->name('u.search');

    // 404 route
    Route::get('/404', [UserController::class, 'notFound'])->name('404');
});
