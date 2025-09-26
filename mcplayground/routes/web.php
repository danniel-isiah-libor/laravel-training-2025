<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::prefix('user')->group(function(){
    Route::get('info', function(){
        return response()->json("User");
    });
});
