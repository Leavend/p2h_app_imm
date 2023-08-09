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
            'jenis_kendaraan' => $this->faker->randomElement(['Mobil', 'Bus', 'Truk']),
            'nomor_lambung' => 'P' . $this->faker->unique()->numberBetween(100000, 999999),
            'nomor_polisi' => 'S' . $this->faker->unique()->randomLetter() . $this->faker->unique()->randomNumber(5),
            // Tambahan atribut lain sesuai kebutuhan
        ];
    }
}
