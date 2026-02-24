<?php

namespace Database\Seeders\Wallets;

use App\Models\Users\User;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();

        $user->wallets()->createMany([
            [
                'name' => 'KES Wallet',
                'description' => 'Kenya Shillings Wallet',
            ],
            [
                'name' => 'USD Wallet',
                'description' => 'US Dollars Wallet',
            ],
        ]);
    }
}
