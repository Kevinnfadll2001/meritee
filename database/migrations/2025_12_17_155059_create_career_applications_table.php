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
    Schema::create('career_applications', function (Blueprint $table) {
        $table->id();

        // Personal Info
        $table->string('first_name');
        $table->string('last_name');
        $table->string('gender');
        $table->unsignedTinyInteger('age');

        // Contact Info
        $table->string('email');
        $table->string('phone');

        // Education
        $table->string('education_level');
        $table->string('last_school');

        // Address
        $table->string('address');
        $table->string('street_address');
        $table->string('city');

        // Resume
        $table->string('resume');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_applications');
    }
};
