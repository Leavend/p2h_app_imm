<?php

// P2hFactory.php
namespace Database\Factories;

use App\Models\P2h;
use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

class P2hFactory extends Factory
{
    protected $model = P2h::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kendaraan = Kendaraan::inRandomOrder()->first();
        return [
            'kendaraan_id' => $kendaraan->id,
            'tanggal' => now('Asia/Makassar')->format('Y-m-d'),
            'jam' => now('Asia/Makassar')->format('H:i:s'),
            'nama_pemeriksa' => $this->faker->name,
            'nik' => $this->faker->unique()->numerify('######'),
            'departemen' => $this->faker->word,
            'no_hp' => $this->faker->phoneNumber,
            'keterangan' => 'Data P2h baru terkait dengan kendaraan ini',
            'status' => 'belum diperiksa',
        ];
    }
}
