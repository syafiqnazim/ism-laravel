<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmodulKursusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submodul_kursuses', function (Blueprint $table) {
            $table->id();
            $table->string('nama_submodul');
            $table->unsignedBigInteger('kursus_id');
            $table->time('masa_mula')->default(date("H:i:s"));
            $table->time('masa_akhir')->default(date("H:i:s"));
            $table->unsignedBigInteger('penceramah_id');
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
        Schema::dropIfExists('submodul_kursuses');
    }
}
