<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('rahasia123'), // Password untuk login
        ]);
        User::create([
            'name' => 'vano',
            'email' => 'vano@gmail.com',
            'password' => Hash::make('rahasia789'), // Password untuk login
        ]);
    }
}