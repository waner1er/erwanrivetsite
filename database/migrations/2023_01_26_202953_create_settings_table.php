<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->integer('settings_order');
            $table->boolean('active_settings');
            $table->string('title');
            $table->string('description');
            $table->string('img')->nullable();
            $table->string('img_alt')->nullable();
            $table->string('author');
            $table->text('about_paragraph');
            $table->string('about_title');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('footer_about_title')->nullable();
            $table->text('footer_about_paragraph');
            $table->json('social_media')->nullable();

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
