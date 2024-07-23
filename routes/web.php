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

// Error Redirect
Route::get('/404', [ErrorRedirectController::class, 'notFound'])->name('notFound');

//Dashboard
// Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
// });


