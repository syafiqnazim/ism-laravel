<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempahanAsramas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempahan_asramas', function (Blueprint $table) {
            $table->id();
            $table->date('tarikh_masuk')->default(date("Y-m-d")); 
            $table->date('tarikh_keluar')->default(date("Y-m-d")); 
            $table->unsignedBigInteger('asrama_id'); 
            $table->unsignedBigInteger('kursus_id');
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
        Schema::dropIfExists('tempahan_asramas');
    }
}
