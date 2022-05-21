<?php

use App\Http\Controllers\admin\AdminUserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;

/**
 * admin route
 */
Route::get('admin-dashboard', [DashboardController::class, 'showDashboard'])-> name('admin.dashboard');
Route::get('admin-login', [LoginController::class, 'showLogin'])->name('admin.login');

/**
 * permission route
 */
Route::get('admin-permission', [PermissionController::class, 'index'])->name('admin.permission');

/**
 * role route
 */
Route::get('role', [RoleController::class, 'index'])->name('admin.role');

/**
 * admin user route
 */
Route::get('admin-user', [AdminUserController::class, 'index'])->name('admin.user');
