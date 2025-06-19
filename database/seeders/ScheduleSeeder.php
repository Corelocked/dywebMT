<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schedule::factory()->count(20)->create();

        $schedules = Schedule::all();
        foreach ($schedules as $schedule) {
            // Check if the schedule has a related course
            if ($schedule->course) {
                // Attach all students for this course to the schedule
                foreach ($schedule->course->students as $student) {
                    $schedule->students()->attach($student->id);
                }
                // Attach all teachers for this course to the schedule
                foreach ($schedule->course->teachers as $teacher) {
                    $schedule->teachers()->attach($teacher->id);
                }
            }
        }
    }
}
