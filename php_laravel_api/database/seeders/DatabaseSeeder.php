<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //user or admin login
        User::create([
            'email' => 'admin@lucky.com',
            'full_name' => 'admin',
            'password' => bcrypt('123456'),
            'is_admin' => true,
            'create_time'=>'2023-08-11'
        ]);
        User::create([
            'email' => 'user@lucky.com',
            'username' => 'user',
            'password' => bcrypt('123456'),
            'is_admin' => false,
            'create_time'=>'2023-08-11'
        ]);
    }
}
