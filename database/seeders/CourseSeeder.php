<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::factory()->count(20)->create();
        $courses = Course::all();
        foreach ($courses as $course) {
            // Attach students to the course
            $students = Student::factory()->count(5)->create();
            $course->students()->attach($students->pluck('id'));

            // Attach teachers to the course
            $teachers = Teacher::factory()->count(2)->create();
            $course->teachers()->attach($teachers->pluck('id'));
        }
    }
}
