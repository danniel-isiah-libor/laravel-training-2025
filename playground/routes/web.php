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

Route::get('/sign-in', function(){
    return view('sign-in');
})->name('sign-in');
Route::get('/sign-up', function(){
    return view('sign-up');
})->name('sign-up');

Route::prefix('/')->name('user.')->group(function(){
    Route::post('/sign-up', [UserController::class, 'store'])->name('store');
});



Route::redirect('go-to-users', '/admin/users/users');

    // parameter route
Route::get('/user/{id}', [UserController::class, 'show']);
    Route::get('/username/{name?}', function(string $name = "Dora"){
        return 'User Name: '. $name;
});

Route::get('/request', function(Request $request ){
    dd($request);
});

