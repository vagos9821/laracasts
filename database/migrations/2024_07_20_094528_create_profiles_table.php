<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('twitter_tag')->unique();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('bg_color');
            $table->string('facebook_url');
            $table->string('linkedin_url');
            $table->string('twitter_url');
            $table->string('instagram_url');
            $table->string('github_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('profiles');
    }
};
