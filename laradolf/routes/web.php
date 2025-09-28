<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\InterestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('welcome'));

Route::prefix('/admin')->name('admin.')->group(function () {
    // Ensure signup and signin routes are defined first
    Route::get('/signup', function () {
        // dd('Signup route hit');
        return view('auth.signup');
    })->name('signup');
    Route::post('/signup', [UserController::class, 'store'])->name('signup.store');
    Route::match(['get', 'post'], '/signin', [UserController::class, 'login'])->name('signin');
    Route::get('/signin', fn() => view('auth.signin'))->name('signin');

    // Define interests routes after signup and signin
    Route::get('/interests', [InterestController::class, 'show'])->name('interests');
    Route::post('/interests', [InterestController::class, 'submit'])->name('interests.submit');

    Route::prefix('/users')->name('users.')->group(function () {
        Route::get('/profile/{id?}', [UserController::class, 'show'])->name('profile');
        // Route::get('/users/information', fn() => 'User Information')->name('information');
        Route::delete('/{id}', [UserController::class, 'delete'])->name('delete');
    });
    Route::get('/profile/all', fn() => redirect()->route('admin.dashboard'));
    Route::get('/profile', fn() => redirect()->route('admin.dashboard'));
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    Route::get('/go-to-admin', fn() => redirect()->route('admin.dashboard'))->name('go-to-admin');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/posts', [UserController::class, 'showPosts'])->name('posts.index');
    Route::get('/posts/{id}', [UserController::class, 'showPost'])->name('admin.posts.show');
    Route::get('/posts/all', [UserController::class, 'showAllPosts'])->name('admin.posts.all');
});