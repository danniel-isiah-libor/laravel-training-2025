<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return '<h1>Hello po</h1>';
});
    // route prefix for admin
Route::prefix('/admins')->name('admin.')->group(function () {
    // route prefix for users
    Route::prefix('/users')->group(function (){
        Route::get('/profiles', function() {
             return 'this is user profiles'; 
        })->name('profile');

        Route::get('/information', function (){

            //  $object = [
            //     'username' => 'Ddemian',
            //     'nickname' => 'qweqweqwe'
            //     ];

            // return $object['username'];

              return 'this is user information';
        });
    });

    Route::get('go-to-admin', function(){
        return redirect()->route('admin.profile');
    });

    // Route::redirect('from-here', 'to-there');
    

});