<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    // database/migrations/2023_07_25_create_user_profile_table.php
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('headline');
            $table->string('location_country_code');
            $table->string('location_name');
            $table->string('industry');
            $table->string('email')->unique();
            $table->string('picture_url');
            $table->string('public_profile_url');
            $table->integer('connections');
            $table->text('summary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile');
    }
};
