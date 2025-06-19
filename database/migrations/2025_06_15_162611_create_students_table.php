<?php

use Dom\Comment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('Student first name');
            $table->string('last_name')->comment('Student last name');
            $table->string('program')->comment('Program of study, e.g., Computer Science');
            $table->string('enrollment_year')->max(4)->comment('Year of enrollment, e.g., 2025');
            $table->dateTime('birth_date')->comment('Date of birth of the student');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('student');
    }
};
