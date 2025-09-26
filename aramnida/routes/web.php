<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

        // return '<h1>Hello Ice!</h1>';
});


// Route::prefix('/admin')->group(function (){
//     Route::prefix('/users')->group(function (){
//         Route::get('profile', function () {
//         // Matches The "/admin/users" URL
//         return 'User profile';
//         });
//     });
// });


// Route::post('', function () {
//     #logic here...
// })->name('registration.store');

Route::prefix('/admin')->name('admin.')->group(function (){
    Route::prefix('/users')->group(function (){

        Route::get('/profile/{id}', [RegistrationController::class, 'show'])->name('profile');

        Route::get('/information', RegistrationController::class)->name('information');

        Route::get('/dashboard', function() {
            return 'Admin Dashboard';
        })->name('dashboard');
    });

});

// Route::get('/post', function (){
//     return view('post');
// });

// Route::get('/user/{id?}', function($id=NULL){
//     return "User ID: {$id}";
// });


// Route::view('/post', 'post');

// Route::redirect('/admin', '/admin/users/dashboard');

Route::get('/request', function(Request $request){
    // dump();
    dd($request->date('birthdate')->diffForHumans());
});

