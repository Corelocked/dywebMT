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
            'first_name' => collect(fake()->words(fake()->numberBetween(1, 3)))->map(fn($word) => ucfirst($word))->implode(' '),
            'last_name' => collect(explode(' ', fake()->lastName()))->take(fake()->numberBetween(1, 2))->implode(' '),
            'birth_date' => fake()->dateTimeBetween('-30 years', '-18 years'),
            'program' => fake()->randomElement(['BSCS', 'BSEMC', 'BMMA-Animation', 'BMMA-Film', 'BMMA-Graphic Design', 'BSE']),
            'enrollment_year' => fake()->numberBetween(now()->year - 6, now()->year),
            'user_id' => User::factory(),
        ];
    }
}
