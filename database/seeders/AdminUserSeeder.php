<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'], // check if already exists
            [
                'name' => 'Super Admin',
                'password' => Hash::make('admin123456'), // replace with secure password
                'is_admin' => true,
                'is_active' => true,
                'is_verified' => true,
                'is_banned' => false,
                'is_suspended' => false,
            ]
        );
    }
}
