<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\IsAdmin;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function (): void {
Route::get('/promo', function () {
    return view('promo.promo');
});
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

Route::middleware('auth')->group(function (): void {
    Route::get('/about_us', function () {
        return view('about_us.about_us');
    });
});

Route::get('/home', function () {
    return view('home');
});



// Admin Page
Route::prefix('admin')->middleware(['auth', IsAdmin::class])->name('admin.')->group(function () {
    Route::get('/', fn () => view('admin.dashboard'))->name('dashboard');

    // Sesuaikan nama dan resource controller
    Route::resource('menu', MenuController::class)
    ->only(['index', 'store', 'update', 'destroy'])
    ->names([
        'index' => 'menu.index',
        'store' => 'menu.store',
        'update' => 'menu.update',
        'destroy' => 'menu.destroy',
    ]);


    Route::resource('promo', PromoController::class)->except(['show', 'create'])->names([
        'index' => 'promo.index',
        'store' => 'promo.store',
        'update' => 'promo.update',
        'destroy' => 'promo.destroy',
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



Route::middleware('auth')->group(function (): void {
    Route::get('/payment', function () {
        return view('payment');
    });
});

Route::middleware('auth')->group(function (): void {
    Route::get('menu', [MenuController::class, 'userIndex'])->name('menu');
});



require __DIR__.'/auth.php';

?>