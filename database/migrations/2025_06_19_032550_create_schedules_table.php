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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('day_of_the_week')->max(10)->comment('Day of the week for the schedule.');
            $table->dateTime('time_slot')->comment('Time slot for the schedule, e.g., 10:00 AM - 11:00 AM');
            $table->string('room')->max(20)->comment('Room number or name where the class is held.');
            $table->integer('term')->comment('Term number for the schedule, e.g., 1 for first term, 2 for second term.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
