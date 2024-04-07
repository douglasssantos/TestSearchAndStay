<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Book\Database\Seeders\BookSeeder;
use App\Store\Database\Seeders\StoreSeeder;
use App\Store\Models\Store;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(BookSeeder::class);
        $this->call(StoreSeeder::class);
    }
}
