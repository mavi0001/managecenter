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
        Schema::create('minor_activities', function (Blueprint $table) {
            $table->id();
            $table->string('activity_name');
            $table->string('year');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('location_name');
            $table->string('province');
            $table->integer('number_of_participants');
            $table->string('city');
            $table->string('organizer_names');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minor_activities');
    }
};
