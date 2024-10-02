<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminCigaretteController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductsController::class, 'index'])->name('home');

Route::view('/admin/login', 'admin/admin-login')->name('admin_login');
Route::view('/admin/register', 'admin/admin-register')->name('admin_register');
Route::get('/admin/panel', [AdminPanelController::class, 'index'])->name('admin_panel');


Route::post('/admin/register', [AdminAuthController::class, 'register'])->name('register');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('login');

Route::resource('cigarettes', AdminCigaretteController::class);
