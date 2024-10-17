<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EximController;
use App\Http\Controllers\PPICController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\PurchasingController;

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

Route::middleware(['auth', 'role:exim'])->group(function(){
    Route::get('/exim/dashboard',[EximController::class, 'dashboard']);
});

Route::middleware(['auth', 'role:ppic'])->group(function(){
    Route::get('/ppic/dashboard',[PPICController::class, 'dashboard']);
});

Route::middleware(['auth', 'role:gudang'])->group(function(){
    Route::get('/gudang/dashboard',[GudangController::class, 'dashboard']);
});

Route::middleware(['auth', 'role:purchasing'])->group(function(){
    Route::get('/purchasing/dashboard',[PurchasingController::class, 'dashboard']);
});

require __DIR__.'/auth.php';
