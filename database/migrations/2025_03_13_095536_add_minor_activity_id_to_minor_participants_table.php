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
        Schema::table('minor_participants', function (Blueprint $table) {
            $table->unsignedBigInteger('minor_activity_id')->nullable()->after('id');
            $table->foreign('minor_activity_id')->references('id')->on('minor_activities')->onDelete('set null'); // Add foreign key constraint
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('minor_participants', function (Blueprint $table) {
            $table->dropForeign(['minor_activity_id']);
            $table->dropColumn('minor_activity_id');
        });
    }
};
