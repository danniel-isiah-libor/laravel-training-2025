<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/signup', fn() => view('auth.signup'))->name('signup');
    Route::post('/signup', [UserController::class, 'store'])->name('signup.store');
    Route::get('/signin', fn() => view('auth.signin'))->name('signin');
    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/profile/{id?}', [UserController::class, 'show'])->name('profile');
        Route::get('/users/information', fn() => 'User Information')->name('information');
    });
    Route::get('/dashboard', fn() => 'Admin Dashboard')->name('dashboard');
    Route::get('/go-to-admin', fn() => redirect()->route('admin.dashboard'))->name('go-to-admin');
});

