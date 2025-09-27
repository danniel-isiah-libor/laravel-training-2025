<?php

use App\Http\Controllers\InterestController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/profile/{id?}', [UserController::class, 'show'])->name('profile');

        Route::get('information', UserController::class)->name('information');
    });

    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    })->name('dashboard');
});

// Route::redirect('/go-to-admin', '/admin/dashboard', 301);

Route::get('go-to-admin', function () {
    return redirect()->route('admin.dashboard');
})->name('go-to-admin');

Route::get('/user/{id?}', function ($id = null) {
    return 'User ID:' . $id;
})->name('user.id');

Route::get('/request', function (Request $request) {
    // dump();
    dd($request);
})->name('request');

Route::view('/sign-up', 'auth.sign-up')->name('signup');
Route::view('/log-in', 'auth.login-page')->name('login');
Route::post('/sign-up', [UserController::class, 'store'])->name('user.store');
Route::post('/log-in', [UserController::class, 'login'])->name('user.login');

Route::get('/interests', [InterestController::class, 'index'])->name('interests.index');
Route::post('/interests', [InterestController::class, 'store'])->name('interests.store');
