<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingPenceramahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_penceramahs', function (Blueprint $table) {
            $table->id();
            $table->integer('kursus_id');
            $table->integer('penceramah_id');
            $table->integer('rate_1');
            $table->integer('rate_2');
            $table->integer('rate_3');
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
        Schema::dropIfExists('rating_penceramahs');
    }
}
