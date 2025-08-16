<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('display_name')->unique();
            $table->string('location')->nullable();
            $table->string('skill_level')->nullable();
            $table->string('favourtie_spot')->nullable();
            $table->string('riding_style')->nullable();
            $table->text('bio')->nullable();
            $table->string('tagline')->nullable();
            $table->json('social_links')->nullable();
            $table->json('current_setup')->nullable();
            $table->string('profile_picture')->nullable();
            $table->softDeletes('deleted_at', precision: 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
