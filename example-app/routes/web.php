<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::post('/login', [AuthController::class,'login'])->name('auth.login');
Route::post('/register', [AuthController::class,'register'])->name('auth.register');

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/interests', [InterestController::class, 'index'])->name('interests.index');
Route::post('/interests', [InterestController::class, 'store'])->name('interests.store');

