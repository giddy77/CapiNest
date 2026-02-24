<?php

namespace Database\Seeders\Transactions;

use App\Models\Transactions\Transaction;
use App\Models\Wallets\Wallet;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wallets = Wallet::all();

        foreach ($wallets as $wallet) {

            // Income transaction
            Transaction::create([
                'wallet_id' => $wallet->id,
                'transaction_type' => 'income',
                'amount' => 5000,
                'description' => "Initial deposit for {$wallet->name}",
            ]);

            // Expense Transaction
            Transaction::create([
                'wallet_id' => $wallet->id,
                'transaction_type' => 'expense',
                'amount' => 1200,
                'description' => "Sample expense for {$wallet->name}",
            ]);
        }
    }
}
