<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CHECK THIS ROUTES -if they are neccessary
|--------------------------------------------------------------------------
||
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| CHECK THIS ROUTES -if they are neccessary
|--------------------------------------------------------------------------
||
*/



// Common route for all authenticated users
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Admin-only routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return 'Welcome, Admin!';
    });
});

// Judge-only routes
Route::middleware(['auth', 'role:judge'])->group(function () {
    Route::get('/judge', function () {
        return 'Welcome, Judge!';
    });
});

// Clerk-only routes
Route::middleware(['auth', 'role:clerk'])->group(function () {
    Route::get('/clerk', function () {
        return 'Welcome, Clerk!';
    });
});

// Attorney-only routes
Route::middleware(['auth', 'role:attorney'])->group(function () {
    Route::get('/attorney', function () {
        return 'Welcome, Attorney!';
    });
});

// Public role routes
Route::get('/public', function () {
    return 'Welcome to the Public Portal!';
});

require __DIR__.'/auth.php';