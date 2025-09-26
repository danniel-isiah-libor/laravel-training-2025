<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return "<html>
       <marquee> INAANTOK KA NA TIN? </marquee>
    </html>";
});

Route::prefix('/admin')->name('admin.')->group(function (){
    Route::prefix('/users')->group(function(){

        Route::get('/profile', function(){
            return 'User Profile';
        })->name('profile');

        Route::get('/users', function(){
            return 'Admin User';
        })->name('users');

        Route::get('/information', function(){
            return 'Admin Information';
        })->name('information');
        
    });
    
});
