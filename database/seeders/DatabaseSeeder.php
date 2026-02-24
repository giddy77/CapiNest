<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\Transactions\TransactionSeeder;
use Database\Seeders\Users\UserSeeder;
use Database\Seeders\Wallets\WalletSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            WalletSeeder::class,
            TransactionSeeder::class
        ]);
    }
}
