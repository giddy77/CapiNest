<?php

namespace Database\Seeders\Users;

use App\Models\Users\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Gideon Sipoi',
            'email' => 'giddysipoi@gmail.com',
            'password' => '&CapiNest@2026!'
        ];

        User::create($user);
    }
}
