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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->max(50)->comment('Subject of the course');
            $table->string('course_code')->max(10)->unique()->comment('Unique code for the course');
            $table->integer('credits')->unsigned()->comment('Number of credits for the course');
            $table->string('description')->nullable()->comment('Description of the course');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
