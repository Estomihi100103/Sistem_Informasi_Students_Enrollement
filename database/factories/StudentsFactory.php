<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $username = $this->faker->userName;
        while (strpos($username, '.') !== false) {
            $username = $this->faker->userName;
        }

        return [
            'nim' => $this->faker->unique()->randomNumber(8),
            'name' => $this->faker->name,
            'username' => $username,
            'email' => $this->faker->unique()->safeEmail,
            'prodi' => $this->faker->randomElement(['Informatika', 'Teknik Elektro', 'Sistem Informasi']),
            'angkatan' => $this->faker->year,
            'image' => null, // Jika gambar defaultnya null atau tidak ada gambar default
        ];
    }
}