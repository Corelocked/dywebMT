<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->comment('First name of the teacher');
            $table->string('last_name')->comment('Last name of the teacher');
            $table->string('email')->max(50)->unique()->comment('Email address of the teacher');
            $table->string('department')->max(10)->comment('Department of the teacher');
            $table->dateTime('birth_date')->comment('Date of birth of the teacher');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('teacher');
    }
};
