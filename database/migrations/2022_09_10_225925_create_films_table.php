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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->dateTime('release_date');
            $table->tinyInteger('rating');
            $table->string('country');
            $table->string('photo');
            $table->timestamps();
        });
    }


    // Name
    // Description
    // Release Date
    // Rating
    // Ticket Price
    // Country
    // Genre
    // Photo


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};