<?php

use App\Http\Controllers\Wallets\WalletController;

Route::prefix('wallets')->group(function(){
    Route::apiResource('wallets', WalletController::class);
});