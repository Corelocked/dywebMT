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
        Schema::table('schedules', function (Blueprint $table) {
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade')->comment('ID of the teacher assigned to the schedule');
            $table->foreignId('student_id')->constrained()->onDelete('cascade')->comment('ID of the student assigned to the schedule');
            $table->string('course_code')->after('student_id')->comment('Course code associated with the schedule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
            $table->dropColumn('teacher_id');
            $table->dropForeign(['student_id']);
            $table->dropColumn('student_id');
            $table->dropColumn('course_code');
            $table->dropTimestamps();
        });
    }
};
