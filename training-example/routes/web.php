<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::get('/user/{id}', [UserController::class, 'show'])->name('user');
 
Route::get('/request', function (Request $request){ 
    dd($request);
});

Route::get('/register', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'store'])->name('register');

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store'])->name('login');
