<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Student;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'day_of_the_week' => fake()->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']),
            'time_slot' => fake()->time(),
            'room' => strtoupper(fake()->bothify('Room ###')),
            'term' => fake()->randomElement(['1', '2', '3']),
            'teacher_id' => Teacher::factory()->create()->id,
            'student_id' => Student::factory()->create()->id,
            'course_code' => Course::factory()->create()->course_code,
        ];
    }
}
