<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempahanKenderaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempahan_kenderaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_penempah');
            $table->string('ic_penempah');
            $table->string('tujuan');
            $table->string('destinasi');
            $table->string('pemandu');
            $table->string('jenis_kenderaan');
            $table->string('tarikh_mula')->nullable();
            $table->string('tarikh_akhir')->nullable();
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
        Schema::dropIfExists('tempahan_kenderaans');
    }
}
