<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PaymentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Admin Page
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', fn () => view('admin.dashboard'))->name('dashboard');

    // Sesuaikan nama dan resource controller
    Route::resource('menu', MenuController::class)->except(['show'])->names([
        'index' => 'menu.index',
        'create' => 'menu.create',
        'store' => 'menu.store',
        'edit' => 'menu.edit',
        'update' => 'menu.update',
        'destroy' => 'menu.destroy',
    ]);

    Route::resource('promo', PromoController::class)->only(['index'])->names([
        'index' => 'promo.index'
    ]);

    Route::resource('order', OrderController::class)->only(['index'])->names([
        'index' => 'order.index'
    ]);

    Route::resource('order-detail', OrderDetailController::class)->only(['index'])->names([
        'index' => 'order-detail.index'
    ]);

    Route::resource('payment', PaymentController::class)->only(['index'])->names([
        'index' => 'payment.index'
    ]);
});


    


// API Backend route
Route::apiResource('api/menu', MenuController::class);
Route::apiResource('api/promo', PromoController::class);
Route::apiResource('api/order', OrderController::class);
Route::apiResource('api/order-detail', OrderDetailController::class);
Route::apiResource('api/payment', PaymentController::class);


require __DIR__.'/auth.php';
