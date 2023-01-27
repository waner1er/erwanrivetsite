<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('settings_order')->unique();
            $table->boolean('active_settings')->unique();
            $table->string('site_title')->unique();
            $table->string('site_description')->unique();
            $table->string('site_keywords')->unique();
            $table->string('site_author')->unique();
            $table->string('site_email')->unique();
            $table->string('site_phone')->unique();
            $table->string('site_address')->unique();
            $table->string('site_facebook')->unique();
            $table->string('site_twitter')->unique();
            $table->string('site_instagram')->unique();
            $table->string('site_linkedin')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
