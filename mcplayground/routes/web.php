<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'welcome']);
Route::get('/home', [HomeController::class, 'index']);

Route::prefix('user')->group(function () {
    Route::get('info', [UserController::class, 'info']);
    Route::get('list/{id}', [UserController::class, 'show']);
});

Route::view('/signup', 'user.signup')->name('signup');
Route::view('/login', 'user.login')->name('signin');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');
Route::post('/login', [AuthController::class, 'login'])->name('signin.store');
// Route::get('login', [AuthController::class, 'signin'])->name('signin');
