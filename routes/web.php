<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminCigaretteController;
use App\Http\Controllers\AdminLiquidController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CartAccept;
use App\Http\Controllers\ProductsController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductsController::class, 'index'])
    ->name('home');

Route::view('/admin/login', 'admin/admin-login')
    ->name('admin_login');

Route::post('/admin/logout', [AdminPanelController::class, 'logout'])
    ->name('admin_logout');

Route::middleware('admin')->group(function (){
    Route::get('/admin/panel', [AdminPanelController::class, 'index'])
        ->name('admin_panel');

    Route::view('/admin/register', 'admin/admin-register')
        ->name('admin_register');
});

Route::post('/admin/register', [AdminAuthController::class, 'register'])
    ->name('register');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('login');

Route::resource('cigarettes', AdminCigaretteController::class);
Route::resource('liquids', AdminLiquidController::class);

Route::post('/cart/accept', [CartAccept::class, 'accept'])->name('cart.accept');
