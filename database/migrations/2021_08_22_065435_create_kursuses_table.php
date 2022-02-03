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
            $table->string('objektif_program')->nullable();
            $table->string('kapasiti');
            $table->integer('kapasiti_peserta')->default(0);
            $table->string('kluster');
            $table->string('peruntukan');
            $table->string('bilik')->nullable();
            $table->string('tarikh_mula')->nullable();
            $table->string('tarikh_akhir')->nullable();
            $table->string('bil_keperluan_asrama')->nullable();
            $table->tinyInteger('ispeperiksaan')->default(0);
            $table->tinyInteger('isasrama')->default(0);
            $table->tinyInteger('ispraktikal')->default(0);
            $table->tinyInteger('ishantar')->default(0);
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
