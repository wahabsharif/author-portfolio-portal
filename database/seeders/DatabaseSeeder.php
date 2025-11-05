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
        // Create admin user
        User::factory()->create([
            'name' => 'Admin User',
            'username' => 'admin',
            'role' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('pass112233'),
        ]);

        // Create regular test user
        User::factory()->create([
            'name' => 'Test User',
            'username' => 'testuser',
            'role' => 'user',
            'email' => 'test@test.com',
            'password' => bcrypt('pass112233'),
        ]);

        // Optionally create 10 random users
        // User::factory(10)->withoutTwoFactor()->create();
    }
}
