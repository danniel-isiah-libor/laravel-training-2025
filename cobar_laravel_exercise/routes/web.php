<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->name('admin.')->group(function(){
    Route::prefix('/users')->name('users.')->group(function(){
        Route::get('/profile', function(){
            return 'View Profile';
        })->name('profile');

        Route::get('information', function(){
            return 'View Information';
        })->name('information');
    });

    Route::get('/dashboard', function(){
        return 'Admin Dashboard';
    })->name('dashboard');
});

// Route::redirect('/go-to-admin', '/admin/dashboard', 301);

Route::get('go-to-admin', function(){
    return redirect()->route('admin.dashboard');
});