<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\IsAdmin;

// Halaman utama (public)
Route::get('/', fn () => view('welcome'));

// Halaman Home (public)
Route::get('/home', fn () => view('home'));

// Dashboard user (butuh login dan verifikasi)
Route::get('/dashboard', fn () => view('dashboard'))
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Grup route yang membutuhkan autentikasi
Route::middleware('auth')->group(function () {
    
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Halaman About Us (user)
    Route::get('/about_us', fn () => view('about_us'));

    // Halaman Menu (user)
    Route::get('/menu', [MenuController::class, 'userIndex'])->name('menu');

    // Halaman Promo (user)
    Route::get('/promo', [PromoController::class, 'userIndex'])->name('promo');

    // Halaman Payment (user)
    Route::get('/payment', fn () => view('payment'));
});

// Grup route untuk admin
Route::prefix('admin')->middleware(['auth', IsAdmin::class])->name('admin.')->group(function () {

    // Dashboard Admin
    Route::get('/', fn () => view('admin.dashboard'))->name('dashboard');

    // Manajemen Menu
    Route::resource('menu', MenuController::class)->only(['index', 'store', 'update', 'destroy'])->names([
        'index'   => 'menu.index',
        'store'   => 'menu.store',
        'update'  => 'menu.update',
        'destroy' => 'menu.destroy',
    ]);

    // Manajemen Promo
    Route::resource('promo', PromoController::class)->except(['show', 'create'])->names([
        'index'   => 'promo.index',
        'store'   => 'promo.store',
        'update'  => 'promo.update',
        'destroy' => 'promo.destroy',
    ]);

    // Manajemen Order
    Route::resource('order', OrderController::class)->only(['index'])->names([
        'index' => 'order.index',
    ]);

    // Manajemen Order Detail
    Route::resource('order-detail', OrderDetailController::class)->only(['index'])->names([
        'index' => 'order-detail.index',
    ]);

    // Manajemen Payment
    Route::resource('payment', PaymentController::class)->only(['index'])->names([
        'index' => 'payment.index',
    ]);
});

// Auth scaffolding (Laravel Breeze / Jetstream / Fortify)
require __DIR__.'/auth.php';
