<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->name(),
            'last_name' => fake()->name(),
            'birth_date' => fake()->dateTimeBetween('-20 years', '-18 years'),
            'program' => fake()->randomElement(['Computer Science', 'Mathematics', 'Physics', 'Chemistry']),
            'enrollment_year' => fake()->year(),
            'user_id' => User::factory(),
        ];
    }
}
