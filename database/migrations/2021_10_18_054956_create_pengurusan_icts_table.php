<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengurusanIctsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurusan_icts', function (Blueprint $table) {
            $table->id();
            $table->string("nama_kursus");
            $table->string("peralatan");
            $table->string("jumlah");
            $table->string("nama_penempah");
            $table->string("tarikh_mula");
            $table->string("tarikh_akhir");
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
        Schema::dropIfExists('pengurusan_icts');
    }
}
