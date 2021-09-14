<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyelenggaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyelenggaraans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kerosakan');
            $table->string('keterangan_kerosakan');
            $table->string('penyelenggara');
            $table->string('tarikh_aduan');
            $table->string('tarikh_selesai');
            $table->string('status');
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
        Schema::dropIfExists('penyelenggaraans');
    }
}
