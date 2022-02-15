<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterKursusAddKutipan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kursuses', function (Blueprint $table) {
            $table->string('is_free_b40')->nullable();
            $table->integer('fee')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kursuses', function (Blueprint $table) {
            $table->dropColumn('is_free_b40');
            $table->dropColumn('fee');
        });
    }
}
