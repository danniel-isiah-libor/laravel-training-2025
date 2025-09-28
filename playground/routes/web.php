<?php

use App\Http\Controllers\InterestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');

    // return ' ';
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/users') -> group (function () {
        Route::get('/profile/{user}', [UserController::class, 'show'])->name('userProfile');
    });

    Route::get('/information', function () {
        return 'User Information Profile';
    })->name('userInformation');
});

Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    })->name('admin');


Route::get('/go-to-admin', function () {
    return redirect()->route('admin.userProfile');
});

Route::get('/user/{id?}', function (string $id) {
        return "User: {$id}";
    });

Route::get('/user/{name?}', function (string $name) {
        return "Username: {$name}";
    });

Route::get('/request', function (Request $request) {
        // dump();
    dd($request->all());
    });

Route::view('/sign-up', 'sign-up')->name('sign-up');
Route::view('/sign-in', 'sign-in')->name('sign-in');


Route::post('/sign-up', [UserController::class, 'store'])->name('user.store');
Route::post('/sign-in', [UserController::class, 'login'])->name('user.login');


//Route::view('/interests', 'interests')->name('interest');
// Route::post('/interest', [InterestController::class, 'store'])->name('interest.store');
Route::get('/interest', [InterestController::class, 'index'])->name('interest.index');
Route::post('/interest', [InterestController::class, 'store'])->name('interests.store');

// Route::get('/post', [PostController::class, 'index'])->name('post.index');
// Route::post('/post', [PostController::class, 'create'])->name('post.create');

// Route::prefix('/blog') -> group (function () {
//         Route::get('/post', [PostController::class, 'index'])->name('post.index');
//         Route::post('/post', [PostController::class, 'create'])->name('post.create');
//     });

Route::resource('/posts', PostController::class); // ->except(['destroy']);

Route::prefix('/posts')->name('posts.')->group(function () {
    Route::get('/listing', [PostController::class, 'listing'])->name('listing');
});
