<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminCigaretteController;
use App\Http\Controllers\AdminLiquidController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductsController;
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
});

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('login');

Route::resource('cigarettes', AdminCigaretteController::class);
Route::resource('liquids', AdminLiquidController::class);

Route::get('/cart/order', [OrderController::class, 'order'])->name('cart.order');
Route::post('/cart/order', [OrderController::class, 'create_order'])->name('cart.create-order');


Route::view('/order/faq', 'cart.faq')->name('order-faq');
Route::view('/order/delivery_payment', 'cart.delivery-payment')->name('order-del_pay');
Route::view('/order/exchange_return', 'cart.exchange-return')->name('order-exch_return');
