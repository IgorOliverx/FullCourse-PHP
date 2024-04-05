<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'igor',
            'email' => 'igor@gmail.com',
            'password' => 'igor'
        ]);
        User::factory()->create([
            'name' => 'aloisio',
            'email' => 'aloisio@gmail.com',
            'password' => 'aloisio'
        ]);
    }
}
