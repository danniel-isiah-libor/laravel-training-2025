<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    // return view('welcome');
    return "<html>
       <marquee> INAANTOK KA NA TIN? </marquee>
    </html>";
});

Route::prefix('/admin')->name('admin.')->group(function (){
    Route::prefix('/users')->group(function(){

        Route::get('/profile', [UserController::class, 'show'])->name('profile');

        Route::get('/users', function(){
        })->name('users');

        Route::get('/information', function(){
            return 'Admin Information';
        })->name('information');

    });




});
    Route::redirect('go-to-users', '/admin/users/users');

    // // 404 not found; when route accessed does not exist
    Route::fallback(function(){
        return "mali route mo";
    });

        // parameter route
    Route::get('/user/{id}', [UserController::class, 'show']);
        Route::get('/username/{name?}', function(string $name = "Dora"){
            return 'User Name: '. $name;
    });

    Route::get('/request', function(Request $request ){
        dd($request);
    });

