<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::create([
            'first_name' => 'Admin',
            'last_name' => '',
            'email' => 'admin@gmail.com',
            'number' => '000000000',
            'refer_code' => '',
            'id_image' => '1',
            'address' => 'pratap nagar',
            'role' => '1',
            'password' => \Hash::make('Admin@123'),
        ]);
        \App\Models\Commission::create([
            'commission' => 10
        ]);
    }
}
