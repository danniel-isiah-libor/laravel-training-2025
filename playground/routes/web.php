<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

    // return ' ';
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/users') -> group (function () {
        Route::get('/profile', function () {
            return 'User Profile';
        })->name('userProfile');
    });

    Route::get('/information', function () {
        return 'User Information Profile';
    })->name('userInformation');
});

Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    })->name('admin');


Route::get('/go-to-admin', function () {
    return redirect()->route('admin.userProfile');
});




