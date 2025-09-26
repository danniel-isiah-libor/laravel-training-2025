<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return '<h2>Hello, <em>Laravel 2025!</em></h2>';
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/profile', function () {
            return 'User Profile';
        })->name('profile');

        Route::get('/users/information', function () {
        return 'User Information';
        })->name('information');
    });

    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    })->name('dashboard');
    
    Route::get('/go-to-admin', function () {
        // logic here...
        return redirect()->route('admin.dashboard');
    })->name('go-to-admin');

    Route::get('/users/{id?}', function ($id) {
        return 'User ID:'.$id;
    });

    Route::get('/request', function (Request $request) {
        // dump();
        dd($request->date('birthdate')->diffForHumans());

    });

    Route::get('/blog/{slug}', function ($slug) {
        return 'Blog Post: '.$slug;
    })->where('slug', '[A-Za-z0-9\-]+');    
    

});

