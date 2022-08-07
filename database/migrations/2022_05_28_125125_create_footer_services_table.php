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
        Schema::create('footer_services', function (Blueprint $table) {
            $table->id();
            $table->string('image', 100);
            $table->string('alt', 1000);
            $table->string('title', 100);
            $table->string('link', 200);
            $table->string('author', 100);
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
        Schema::dropIfExists('footer_services');
    }
};
