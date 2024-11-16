<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Judge User',
            'email' => 'judge@example.com',
            'password' => Hash::make('password'),
            'role' => 'judge',
        ]);

        User::create([
            'name' => 'Clerk User',
            'email' => 'clerk@example.com',
            'password' => Hash::make('password'),
            'role' => 'clerk',
        ]);

        User::create([
            'name' => 'Attorney User',
            'email' => 'attorney@example.com',
            'password' => Hash::make('password'),
            'role' => 'attorney',
        ]);

        User::create([
            'name' => 'Public User',
            'email' => 'public@example.com',
            'password' => Hash::make('password'),
            'role' => 'public',
        ]);
    }
}
