<?php

namespace App\User\Database\Seeders;

use App\User\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Douglas S. Santos',
            'email' => "test@test.com",
            'password' => "123456"
        ]);
    }
}
