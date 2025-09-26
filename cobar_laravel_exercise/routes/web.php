<?php

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
