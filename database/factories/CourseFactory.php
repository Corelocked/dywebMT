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
            'subject' => fake()->unique()->sentence(3),
            'description' => fake()->paragraph(),
            'credits' => fake()->numberBetween(2, 5),
            'course_code' => strtoupper(fake()->unique()->bothify('??###')),
        ];
    }
}
