<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Post, User};
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // calls both UserSeeder and PostSeeder
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
        ]);
    }
}
