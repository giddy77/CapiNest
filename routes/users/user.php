<?php

use App\Http\Controllers\Users\UserController;

Route::prefix('users')->group(function(){

    //users api resource
    Route::apiResource('users', UserController::class);

});