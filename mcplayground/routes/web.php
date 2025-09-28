<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'welcome']);
// Route::get('/home', [HomeController::class, 'index']);
Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('custom.auth');

Route::prefix('user')->group(function () {
    Route::get('info', [UserController::class, 'info']);
    Route::get('list/{id}', [UserController::class, 'show']);

    Route::get('interests', [InterestController::class, 'welcome'])->name('firsttimelogin');
    Route::post('save-interests', [InterestController::class, 'saveInterests'])->name('save.interests');
});


Route::get('/feed', [PostController::class, 'viewFeed'])->name('feed');
Route::prefix('post')->group(function () {
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
    Route::put('/update/{post}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/delete/{post}', [PostController::class, 'destroy'])->name('post.delete');
});

Route::view('/signup', 'user.signup')->name('signup');
Route::view('/login', 'user.login')->name('signin');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.store');
Route::post('/login', [AuthController::class, 'login'])->name('signin.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('login', [AuthController::class, 'signin'])->name('signin');
