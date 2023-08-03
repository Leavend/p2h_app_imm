<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata = [
            [
                'username' => 'Masseop',
                'name' => 'Mas operator',
                'email' => 'Masoperator@gmail.com',
                'role' => 'operator',
                'password' => bcrypt('123'),
            ],
            [
                'username' => 'Massemin',
                'name' => 'Mas admin',
                'email' => 'Masadmin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('123'),
            ],
        ];

        foreach ($userdata as $key => $a) {
            User::create($a);
        }
    }
}
