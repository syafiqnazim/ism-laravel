<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingKursusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating_kursuses', function (Blueprint $table) {
            $table->id();
            $table->integer('kursus_id');
            $table->integer('rate_1');
            $table->integer('rate_2');
            $table->integer('rate_3');
            $table->string('suggestion')->nullable();
            $table->integer('rate_food_1');
            $table->integer('rate_food_2');
            $table->integer('rate_food_3');
            $table->integer('rate_food_4');
            $table->integer('rate_food_5');
            $table->integer('rate_food_6');
            $table->integer('rate_food_7');
            $table->string('food_suggestion')->nullable();
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
        Schema::dropIfExists('rating_kursuses');
    }
}
