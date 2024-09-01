<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumberController;

// Home Route
Route::get('/', function () {
    return view('basic');
})->name('home');

// Route Parameters Example
Route::get('/user/{id}', function ($id) {
    return view('user', ['id' => $id]);
})->name('user.show');

// Named Routes Example
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

// Route Groups Example
Route::prefix('admin')->group(function () {
    // Admin Dashboard Route
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Fallback Route Example
Route::fallback(function () {
    return view('fallback');
});


// Route for GenapGanjil
Route::get('/genapganjil', [NumberController::class, 'genapGanjil'])->name('genapganjil');

// Route for Fibonacci
Route::get('/fibonacci', [NumberController::class, 'fibonacci'])->name('fibonacci');

// Route for Prima
Route::get('/prima', [NumberController::class, 'prima'])->name('prima');