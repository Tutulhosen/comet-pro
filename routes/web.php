<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;

/**
 * admin route
 */
Route::get('admin-dashboard', [DashboardController::class, 'showDashboard'])-> name('admin.dashboard');
Route::get('admin-login', [LoginController::class, 'showLogin'])->name('admin.login');

