<?php

use App\Http\Controllers\auth\AdminController;
use App\Http\Controllers\dashboard\DashboardController;
use App\Http\Controllers\ErrorRedirectController;
use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Route;

//Frontend
Route::get('/', [FrontendController::class, 'index'])->name('index');

//Admin Auth
Route::get('/admin', [AdminController::class, 'adminLogin'])->name('adminLogin');
Route::post('/login-post', [AdminController::class, 'loginPost'])->name('loginPost');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

// Error Redirect
Route::get('/404', [ErrorRedirectController::class, 'notFound'])->name('notFound');

//Dashboard
Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function () {

    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    //Admin Register
    Route::get('/register', [AdminController::class, 'register'])->name('register');

    //Admin Register
    Route::get('/users', [AdminController::class, 'users'])->name('users');

    //Admin Profile
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
});


