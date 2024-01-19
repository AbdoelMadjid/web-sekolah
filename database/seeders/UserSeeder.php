<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Master',
                'email' => 'master@skaone.com',
                'password' => bcrypt('12345'),
                'role' => 'Master',
            ],

            [
                'name' => 'Admin',
                'email' => 'admin@skaone.com',
                'password' => bcrypt('12345'),
                'role' => 'Admin',
            ],
            [
                'name' => 'Guru A',
                'email' => 'gurua@skaone.com',
                'password' => bcrypt('12345'),
                'role' => 'Guru',
            ],

        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
