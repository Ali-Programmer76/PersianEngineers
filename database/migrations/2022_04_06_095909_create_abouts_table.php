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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250);
            $table->string('subtitle', 250);
            $table->string('description', 1000);
            $table->string('help', 250);
            $table->string('service_title_first', 250);
            $table->string('service_description_first', 500);
            $table->string('service_title_second', 250);
            $table->string('service_description_second', 500);
            $table->string('service_title_third', 250);
            $table->string('service_description_third', 500);
            $table->string('service_title_fourth', 250);
            $table->string('service_description_fourth', 500);
            $table->string('experience_title', 100);
            $table->string('experience_description', 250);
            $table->string('image', 100);
            $table->string('alt', 250);
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
        Schema::dropIfExists('abouts');
    }
};
