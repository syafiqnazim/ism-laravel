<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKutipanYuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kutipan_yurans', function (Blueprint $table) {
            $table->id();
            $table->integer('peserta_id');
            $table->integer('kursus_id')->nullable();
            $table->string('no_resit')->nullable();
            $table->date('tarikh_bayaran');
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
        Schema::dropIfExists('kutipan_yurans');
    }
}
