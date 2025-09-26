<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'welcome']);
Route::get('/home', [HomeController::class, 'index']);

Route::prefix('user')->group(function(){
    Route::get('info', [UserController::class, 'info']);
});
