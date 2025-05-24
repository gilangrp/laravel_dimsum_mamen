<?php

use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function (): void {
    Route::get('/payment', function () {
        return view('payment');
    });
});

Route::middleware('auth')->group(function (): void {
    Route::get('menu', function () {
        return view('menu');
    });
});




require __DIR__.'/auth.php';
