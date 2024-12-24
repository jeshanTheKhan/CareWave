<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/Admin-Dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

// User Section
Route::get('/Admin-Add-User', [UserController::class, 'index'])->name('add.user');

require __DIR__.'/auth.php';
