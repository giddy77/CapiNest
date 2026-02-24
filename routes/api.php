<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->group(function(){

    //version 1 api's
    Route::prefix('v1')->group(function(){
        //users
        Route::prefix('')->group(base_path('routes/users/users.php'));

        //wallets
        Route::prefix('')->group(base_path('routes/wallets/wallets.php'));

        //transactions
        Route::prefix('')->group(base_path('routes/transactions/transactions.php'));
    });
    
// });
