<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\{DashController, EmptyController, InterestsController, PostController, RouteController, SignIn, SignUp, UserController};

Route::get('/', [DashController::class, 'show']);

Route::get('/posts', [PostController::class, 'show'])->name('posts');

Route::resource('posts', PostController::class);



Route::get('/signup', function(){
    return view('SignUpPage');
})->name('signup');

Route::get('/interests', [InterestsController::class, 'show']);

Route::post('/interests', [InterestsController::class, 'store'])->name('interests.pass');

Route::post('/signup', [SignUp::class, 'register'])->name('signup.register');

Route::get('/signin', function (){
    return view('SignInPage');
})->name('signin');

Route::post('/signin', [SignIn::class, 'signin'])->name('signin.store');

Route::get('user-profile/{id}', [UserController::class, 'show']);

    // route prefix for admin
Route::prefix('/admins')->name('admin.')->group(function () {
    // route prefix for users
    Route::prefix('/users')->group(function (){
        Route::get('/profiles/{id}', [EmptyController::class, 'show']);

        Route::get('/information', function (){
            return 'this is user information';
        });
    }); 

    Route::get('go-to-admin', function(){
        return redirect()->route('admin.profile');
    });

    // Route::redirect('from-here', 'to-there');
    
   
});
