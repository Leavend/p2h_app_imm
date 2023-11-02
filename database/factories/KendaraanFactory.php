<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kendaraan;

class KendaraanFactory extends Factory
{
    protected $model = Kendaraan::class;

    public function definition(): array
    {
        return [
            'jenis_kendaraan' => $this->faker->randomElement(['LV', 'Bus']),
            'type_kendaraan' => $this->faker->randomElement(['Toyota', 'Innova', 'Mitsubishi']),
            'nomor_lambung' => 'P' . $this->faker->unique()->randomNumber(3),
            'nomor_polisi' => 'KT' . $this->faker->unique()->randomNumber(5) . 'D' . $this->faker->unique()->randomLetter(),
            'tanggal' => now('Asia/Makassar')->format('Y-m-d'),
            'jam' => now('Asia/Makassar')->format('H:i:s'),
        ];
    }
}
