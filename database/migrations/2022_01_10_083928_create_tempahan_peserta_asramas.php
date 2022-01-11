<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempahanPesertaAsramas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempahan_peserta_asramas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tempahan_asrama_id');
            $table->unsignedBigInteger('peserta_id');
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
        Schema::dropIfExists('tempahan_peserta_asramas');
    }
}
