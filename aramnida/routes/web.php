<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

        // return '<h1>Hello Ice!</h1>';
});


// Route::prefix('/admin')->group(function (){
//     Route::prefix('/users')->group(function (){
//         Route::get('profile', function () {
//         // Matches The "/admin/users" URL
//         return 'User profile';
//         });
//     });
// });

Route::prefix('/admin')->name('admin.')->group(function (){
    Route::prefix('/users')->group(function (){
        Route::get('/profile', function () {
            return 'User profile';
        })->name('profile');

        Route::get('/information/fgfgfgfgfg/hhghghhg', function () {
            return 'User Information';
        })->name('information');

        Route::get('/dashboard', function() {
            return 'Admin Dashboard';
        })->name('dashboard');
    });
});

Route::redirect('/go-to-admin', '/admin/users/dashboard');