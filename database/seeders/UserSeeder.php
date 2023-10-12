<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jhordan Sax Cordova Poma',
            'email' => '71660993@continental.edu.pe',
            'password' => bcrypt('71660993')
        ])->assignRole('Admin');
    }
}
