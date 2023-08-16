<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'febyanta',
            'email' => 'febyanta6@gmail.com',
            'password' => Hash::make('Pratama25'), // Ganti 'password' dengan password yang diinginkan
            'role' => 'admin',
        ]);
    }
}
