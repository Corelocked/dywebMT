<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('course_teacher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade')->comment('Foreign key referencing the course');
            $table->foreignId('teacher_id')->constrained()->onDelete('cascade')->comment('Foreign key referencing the teacher');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_teacher');
    }
};