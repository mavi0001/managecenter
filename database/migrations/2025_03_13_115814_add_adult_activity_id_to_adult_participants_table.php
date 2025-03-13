<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('adult_participants', function (Blueprint $table) {
            $table->unsignedBigInteger('adult_activity_id')->nullable()->after('id');
            $table->foreign('adult_activity_id')->references('id')->on('adult_activities')->onDelete('set null'); 
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('adult_participants', function (Blueprint $table) {
            $table->dropForeign(['adult_activity_id']);
            $table->dropColumn('adult_activity_id');
        });
    }
};
