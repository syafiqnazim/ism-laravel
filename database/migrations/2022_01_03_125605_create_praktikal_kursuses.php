<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePraktikalKursuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praktikal_kursuses', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi');            
            $table->date('tarikh')->default(date("Y-m-d")); 
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
        Schema::dropIfExists('praktikal_kursuses');
    }
}
