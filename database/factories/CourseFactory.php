<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => $this->faker->unique()->randomNumber(8),
            'course_name' => $this->faker->randomElement(['Pemrograman Web', 'Pemrograman Berorientasi Objek', 'Pemrograman Mobile']),
            'course_credit' => $this->faker->randomElement(['2', '3', '4']),
            'course_semester' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8']),
        ];
    }
}
