<?php

use App\Http\Controllers\admin\AdminUserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Models\Permission;

/**
 * admin route
 */
Route::get('admin-dashboard', [DashboardController::class, 'showDashboard'])-> name('admin.dashboard');
Route::get('admin-login', [LoginController::class, 'showLogin'])->name('admin.login');

/**
 * permission route
 */
Route::get('permission', [PermissionController::class, 'index'])->name('admin.permission');
Route::post('permission-get', [PermissionController::class, 'store'])->name('permission.store');
Route::get('permission-delete/{id}', [PermissionController::class, 'destroy'])->name('permission.delete');
Route::get('permission-edit/{id}', [PermissionController::class, 'edit'])->name('permission.edit');
Route::post('permission-update/{id}', [PermissionController::class, 'update'])->name('permission.update');

/**
 * role route
 */
Route::get('role', [RoleController::class, 'index'])->name('admin.role');
Route::post('role', [RoleController::class, 'store'])->name('role.store');
Route::get('role-delete/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

/**
 * admin user route
 */
Route::get('admin-user', [AdminUserController::class, 'index'])->name('admin.user');
