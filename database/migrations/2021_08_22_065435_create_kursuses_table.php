<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKursusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kursuses', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kursus');
            $table->string('kapasiti');
            $table->string('kluster');
            $table->string('peruntukan');
            $table->string('bilik');
            $table->string('tarikh_mula');
            $table->string('tarikh_akhir');
            $table->string('bil_keperluan_asrama');
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
        Schema::dropIfExists('kursuses');
    }
}
