<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return '<h1>hello world</h1>';
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/users')->group(function () {
        Route::get('/profile', function () {
            return 'User Profile';
        })->name('profile');

        Route::get('/information', function () {
            return 'User Information';
        })->name('information');
    });

    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    })->name('dashboard');
});

Route::get('/go-to-admin', function () {
    // logic here.....
    return redirect()->route('admin.dashboard');
});

// Route::redirect('/go-to-admin', '/admin/dashboard');
