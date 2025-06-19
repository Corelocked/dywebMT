<?php

namespace Database\Factories;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
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
            'email' => strtolower(str_replace(' ','',explode(' ', $firstName = collect(fake()->words(fake()->numberBetween(1, 3)))
                        ->map(fn($word) => ucfirst($word))->implode(' '))[0]. '.' .collect(explode(' ', $lastName = collect(explode(' ', fake()->lastName()))
                        ->take(fake()->numberBetween(1, 2))->implode(' ')))->last())) . '@ciit.edu.ph',
            'first_name' => $firstName,
            'last_name' => $lastName,
            'department' => fake()->randomElement(['Technology', 'Arts', 'Entrepreneurship', 'Mathematics', 'Science', 'Humanities']),
            'birth_date' => fake()->dateTimeBetween('-50 years', '-30 years'),
            'user_id' => User::factory(),
        ];
    }
}
