<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('adult_participants', function (Blueprint $table) {
        $table->dropColumn('activity_name'); // Supprime la colonne
    });
}

public function down()
{
    Schema::table('adult_participants', function (Blueprint $table) {
        $table->string('activity_name')->nullable(); // Optionnel : pour annuler la suppression
    });
}
};
