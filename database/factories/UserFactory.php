<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'first_name' => collect(fake()->words(fake()->numberBetween(1, 3)))->map(fn($word) => ucfirst($word))->implode(' '),
            'last_name' => collect(explode(' ', fake()->lastName()))->take(fake()->numberBetween(1, 2))->implode(' '),
            'user_name' => strtolower(str_replace(' ','',explode(' ', $firstName = collect(fake()->words(fake()->numberBetween(1, 3)))
                        ->map(fn($word) => ucfirst($word))->implode(' '))[0]. '.' .collect(explode(' ', $lastName = collect(explode(' ', fake()->lastName()))
                        ->take(fake()->numberBetween(1, 2))->implode(' ')))->last())) . '@ciit.edu.ph',
            'first_name' => $firstName,
            'last_name' => $lastName,
            'password' => static::$password ??= Hash::make('password'),
            'registration_date' => fake()->dateTimeThisYear(),
        ];
    }
}
