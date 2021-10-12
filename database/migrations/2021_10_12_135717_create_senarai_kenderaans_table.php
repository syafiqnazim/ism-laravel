<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenaraiKenderaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senarai_kenderaans', function (Blueprint $table) {
            $table->id();
            $table->string('no_pendaftaran');
            $table->string('jenama');
            $table->string('jenis_kenderaan');
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
        Schema::dropIfExists('senarai_kenderaans');
    }
}
