<?php

use App\Http\Controllers\Transactions\TransactionController;

Route::prefix('transactions')->group(function(){

    Route::apiResource('transactions', TransactionController::class);
});