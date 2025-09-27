<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return '<h1>Hello World</h1>';
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('users')->group(function() {
        Route::get('/profile/{id}', [UserController::class, 'show'])->name('profile');

        // Route::get('/information', UserController::class)->name('information');
    });

    Route::get('/dashboard', function () {
        return '<h1>This is dashboard page.</h1>';
    });

    Route::get('/go-to-admin', function () {
        return redirect()->route('admin.profile');
    });

});

// Route::get('/user/{id?}', function ($id = null) {
//     return "User ID: $id";
// });

Route::get('/request', function (Request $request) {
    // dd($request);
    dd($request->boolean('is_admin'));
});


Route::get('/sign-up', [AuthController::class, 'signup']);
Route::get('/sign-in', [AuthController::class, 'signin']);