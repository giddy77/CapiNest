<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::middleware(['auth:sanctum'])->group(function(){

    //version 1 api's
    Route::prefix('v1')->group(function(){
        //users
        Route::prefix('')->group(base_path('routes/users/user.php'));
    });
    
// });
