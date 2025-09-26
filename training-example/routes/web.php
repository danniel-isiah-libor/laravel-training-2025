<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return 'User Profile';
})->name('users');

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/profile', function () {
        return 'Admin Profile Display';
    })->name('profile');

    Route::get('/event-logs', function () {
        return 'Admin Event Logs';
    })->name('event-logs');
});