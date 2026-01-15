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
    Schema::table('career_applications', function (Blueprint $table) {
        $table->string('voice_recording')->after('resume');
    });
}

public function down()
{
    Schema::table('career_applications', function (Blueprint $table) {
        $table->dropColumn('voice_recording');
    });
}

};
