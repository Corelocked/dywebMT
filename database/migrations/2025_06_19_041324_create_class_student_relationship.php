<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('class_student', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->comment('ID of the student');
            $table->unsignedBigInteger('course_id')->comment('ID of the course');
            $table->unsignedBigInteger('schedule_id')->comment('ID of the schedule');
            $table->unsignedBigInteger('teacher_id')->comment('ID of the teacher');
            $table->foreign('student_id')->references('id')->on('students')->comment('Foreign key referencing students table');
            $table->foreign('course_id')->references('id')->on('courses')->comment('Foreign key referencing courses table');
            $table->foreign('schedule_id')->references('id')->on('schedules')->comment('Foreign key referencing schedules table');
            $table->foreign('teacher_id')->references('id')->on('teachers')->comment('Foreign key referencing teachers table');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_student');
    }
};
