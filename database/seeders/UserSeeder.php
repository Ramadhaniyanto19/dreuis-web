<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@dreuis.com',
                'password' => Hash::make('admin'), // Password terenkripsi
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'User Test',
                'email' => 'user@test.com',
                'password' => Hash::make('1234'), // Password terenkripsi
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
