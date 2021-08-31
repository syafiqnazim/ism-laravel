<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenceramahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penceramahs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ic_number');
            $table->string('phone_number');
            $table->string('email');
            $table->string('sector');
            $table->string('title');
            $table->string('gender');
            $table->string('bank_number');
            $table->string('bank_name');
            $table->string('bank_address');
            $table->string('working_address');
            $table->string('home_address');
            $table->string('working_number');
            $table->string('home_number');
            $table->string('fax_number');
            $table->string('service_classified');
            $table->string('position');
            $table->string('grade');
            $table->string('highest_academic');
            $table->string('academic_qualification');
            $table->string('business_qualification');
            $table->string('specialisation');
            $table->string('experience');
            $table->string('professional_member');
            $table->string('distribution');
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
        Schema::dropIfExists('penceramahs');
    }
}
