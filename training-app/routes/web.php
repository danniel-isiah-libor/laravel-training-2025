<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\{DashController, EmptyController, InterestsController, RouteController, SignIn, SignUp, UserController};

Route::get('/', [DashController::class, 'show']);

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

//parameter route
// purpose of the question mark, makes Optional parameter and need to set initial value as null
// if theres no question mark, parameter is required, doesnt need to set an initial parameter 

// Route::get('/', function (Request $request) {
    // dump(); // continue execution
    // dd($request); // stops execution
// });

// for get request
// $query = $request->query('var')

// for post
// $name = $request->input('var')
    // $request->all() for all values in the request


    // laravel things:

    // cloud 
    // telescope
    // herd
    // pulse 
    // socialite
    // sanctum
    // passport
    // valet

// php artisan env:encrypt
// php artisan env:decrypt
// php artisan up / down / --secret=password to access url/password
// php artisan make:component Alert
// php artisan make:controller EmptyController
// php artisan make:controller UserController --resource
