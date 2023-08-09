<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\P2hFactory;
use App\Models\Kendaraan;
use App\Models\P2h;
use Database\Factories\KendaraanFactory;
use App\Models\User;
use Database\Factories\UserFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // P2h::factory()->count(10)->create();
        // User::factory()->count(10)->create();
        Kendaraan::factory()->count(10)->create();
        // Ganti 50 dengan jumlah data yang Anda inginkan
    }
}
