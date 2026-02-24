<?php

namespace App\Http\Controllers\Transactions;

use App\Http\Controllers\Controller;
use App\Http\Requests\Transactions\TransactionRequest;
use App\Http\Resources\Transactions\TransactionResource;
use App\Models\Transactions\Transaction;
use App\Models\Wallets\Wallet;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::latest()->paginate(20);

        return TransactionResource::collection($transactions);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransactionRequest $request)
    {
        $data = $request->validated();

        $wallet = Wallet::findOrFail($data['wallet_id']);

        // If expense, check balance
        if ($data['transaction_type'] === 'expense') {

            if ($wallet) {
                $currentBalance = $wallet->balance;

                if ($data['amount'] > $currentBalance) {
                    return response()->json([
                        'message' => 'Insufficient funds. Cannot create expense transaction.',
                    ], 422);
                }
            }

        }

        $transaction = $wallet->transactions()->create($data);

        return new TransactionResource($transaction);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
}
