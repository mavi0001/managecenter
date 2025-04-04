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
    Schema::create('minor_participants', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->integer('age');
        $table->date('date_of_birth');
        $table->string('city');
        $table->string('father_or_guardian_name');
        $table->string('father_or_guardian_phone');
        $table->string('address');
        $table->text('observation')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minor_participants');
    }
};
