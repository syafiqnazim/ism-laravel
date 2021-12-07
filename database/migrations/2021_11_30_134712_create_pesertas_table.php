<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kursus');
            $table->string('sector');
            $table->string('title');
            $table->string('name');
            $table->string('ic_number');
            $table->string('tarikh_lahir');
            $table->string('gender');
            $table->string('status_perkahwinan');
            $table->string('kumpulan_isi_rumah');
            $table->string('kategori_oku')->nullable();
            $table->string('position');
            $table->string('agensi');
            $table->string('email');
            $table->string('tarikh_lantikan')->nullable();
            $table->string('gred_jawatan')->nullable();
            $table->string('working_address')->nullable();
            $table->string('home_address');
            $table->string('working_number')->nullable();
            $table->string('home_number');
            $table->string('fax_number')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('highest_academic');
            $table->string('penyakit')->nullable();
            $table->string('alahan')->nullable();
            $table->string('relative_name');
            $table->string('pertalian');
            $table->string('relative_address');
            $table->string('relative_home_number');
            $table->string('relative_phone_number');
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
        Schema::dropIfExists('pesertas');
    }
}
