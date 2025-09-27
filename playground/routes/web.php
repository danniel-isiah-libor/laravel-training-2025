<?php

use App\Http\Controllers\InterestController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return '<h1>hello world</h1>';
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/users')->group(function () {
        Route::get('/profile/{id}', [UserController::class, 'show'])->name('profile');

        Route::get('/information', UserController::class)->name('information');
    });

    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    })->name('dashboard');
});

Route::get('/go-to-admin', function () {
    // logic here.....
    return redirect()->route('admin.dashboard');
});

// Route::redirect('/go-to-admin', '/admin/dashboard');

Route::get('/user/{id?}', function ($id = null) {
    return "User ID: {$id}";
});

Route::get('/blog/{slug}', function ($slug = null) {
    return "Blog Slug: {$slug}";
});

Route::get('/request', function (Request $request) {
    // dump();
    // dd($request->date('birthdate')->diffForHumans());
    // dd($request->query());
    // dd($request->birthdate);
});

Route::view('/sign-up', 'signup')->name('signup');
Route::view('/sign-in', 'signin')->name('signin');

Route::post('/sign-up', [UserController::class, 'store'])->name('user.store');
Route::post('/sign-in', [UserController::class, 'login'])->name('user.login');

// Route::view('/interests', 'interests')->name('interests');

Route::get('/interests', [InterestController::class, 'index'])->name('interests.index');
Route::post('/interests', [InterestController::class, 'store'])->name('interests.store');
