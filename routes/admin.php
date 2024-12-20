<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/Admin-Dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

require __DIR__.'/auth.php';
