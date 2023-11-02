<?php

// UsersFactory.php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName,
            'name' => $this->faker->name,
            'nik' => $this->faker->numerify('98#####'),
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'), // Ganti 'password' dengan kata sandi yang Anda inginkan
            'no_hp' => $this->faker->numerify('08###########'), // Menambahkan definisi untuk no_hp
            'departemen' => $this->faker->word, // Menggunakan metode word untuk departemen
            'role' => $this->faker->randomElement(['admin', 'user']),
            'tanggal' => now('Asia/Makassar')->format('Y-m-d'),
        ];
    }
}
