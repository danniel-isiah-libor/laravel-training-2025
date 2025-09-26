<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return '<h1>Hello World</h1>';
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('users')->group(function() {
        Route::get('/profile', function () {
            return 'User Profile'; 
        })->name('profile');

        Route::get('/information', function () {
            return 'User INformation';
        })->name('information');
    });

    Route::get('/dashboard', function () {
        return '<h1>This is dashboard page.</h1>';
    });

    Route::get('/go-to-admin', function () {
        return redirect()->route('admin.profile');
    });
});