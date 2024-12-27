<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/Admin-Dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

// User-Type
Route::get('/Admin-Add-User-type', [UserController::class, 'indextype'])->name('add.user-type');
Route::post('/Admin-Save-User-type', [UserController::class, 'savetype'])->name('usertype.save');
Route::post('/Admin/Update-User-type', [UserController::class, 'updatetype'])->name('updatesave.usertype');

// User-Type Database
Route::get('/Admin-All-User-type', [UserController::class, 'tabletype'])->name('all.user-type');
Route::post('/Admin/UserType-Update-status/{id}', [UserController::class, 'usertypeUpdateStatus'])->name('usertype.updatestatus');
Route::get('/Admin-Edit-User-type/{id}', [UserController::class, 'editusertype'])->name('update.usertype');
Route::get('/Admin-Delete-User-type/{id}', [UserController::class, 'delusertype'])->name('del.usertype');


// User Section
Route::get('/Admin-Add-User', [UserController::class, 'index'])->name('add.user');

require __DIR__.'/auth.php';
