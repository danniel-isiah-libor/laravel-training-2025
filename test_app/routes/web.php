<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('admin.dashboard');
    // return '<h1>Hello World</h1>';
})->middleware('auth');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::prefix('users')->group(function() {
        Route::get('/profile/{user}', [UserController::class, 'show'])->name('profile');
        
        // Route::get('/information', UserController::class)->name('information');
    });

    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    Route::get('/go-to-admin', function () {
        return redirect()->route('admin.profile');
    });

    
});

Route::middleware('auth')->group(function () {
    Route::get('/interests', [InterestController::class, 'create'])->name('interests.create');
    Route::post('/interests', [InterestController::class, 'store'])->name('interests.store');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('posts', PostController::class);
});


Route::middleware('guest')->group(function () {
    Route::get('/sign-up', [AuthController::class, 'signup']);
    Route::get('/sign-in', [AuthController::class, 'signin'])->name('login');
    Route::post('sign-in', [AuthController::class, 'login'])->name('signin');
    
    // Store User
    Route::post('sign-up', [UserController::class, 'store'])->name('signup');
});

