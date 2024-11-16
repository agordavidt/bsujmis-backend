<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Default Breeze routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Group routes for authenticated users
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Role-based routes
    Route::middleware('role:admin')->group(function () {
        Route::get('/admin', [DashboardController::class, 'admin'])->name('admin.dashboard');
    });

    Route::middleware('role:judge')->group(function () {
        Route::get('/judge', [DashboardController::class, 'judge'])->name('judge.dashboard');
    });

    Route::middleware('role:clerk')->group(function () {
        Route::get('/clerk', [DashboardController::class, 'clerk'])->name('clerk.dashboard');
    });

    Route::middleware('role:attorney')->group(function () {
        Route::get('/attorney', [DashboardController::class, 'attorney'])->name('attorney.dashboard');
    });

    Route::middleware('role:public')->group(function () {
        Route::get('/public', [DashboardController::class, 'public'])->name('public.dashboard');
    });
});

// Include the default authentication routes provided by Breeze
require __DIR__.'/auth.php';
