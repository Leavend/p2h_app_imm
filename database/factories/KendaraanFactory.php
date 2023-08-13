<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Kendaraan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kendaraan>
 */
class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Kendaraan::class;

    public function definition(): array
    {
        return [
            'jenis_kendaraan' => $this->faker->randomElement(['LV', 'Bus']),
            'type_kendaraan' => $this->faker->randomElement(['Toyota', 'Innova', 'Mitsubishi']),
            'nomor_lambung' => 'P' . $this->faker->unique()->numberBetween(1000, 9999),
            'nomor_polisi' => 'S' . $this->faker->unique()->randomLetter() . $this->faker->unique()->randomNumber(5),
            'tanggal' => now('Asia/Makassar')->format('Y-m-d'),
            // Tambahan atribut lain sesuai kebutuhan
        ];
    }
}
