<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admon.',
            'email' => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Admin', 
            'groupId' => 1 
        ]);

        User::create([
            'name' => 'Tecmilenio.',
            'email' => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Teacher',
            'groupId' => 1
        ]);

        User::create([
            'name' => 'Student.',
            'email' => 'student@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Student',
            'groupId' => 1
        ]);
    }
}