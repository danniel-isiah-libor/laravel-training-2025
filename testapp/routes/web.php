<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    //return '<h1>Hello, World!</h1>';
});

route::prefix('/admin')->name('admin.')->group(function () {
    route::prefix('/users')->group(function () {
        route::get('/profile', function () {
        return 'User Profile';
    })->name('profile');
        Route::get('/information', function () {
            return 'User Information';
        });
    });

});

