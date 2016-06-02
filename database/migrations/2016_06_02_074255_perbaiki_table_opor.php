<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerbaikiTableOpor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('oportunities', function($table){
        $table->dropColumn('biaya');
        $table->string('deskripsi')->after('jumlah_step');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('oportunities', function($table){
        $table->integer('biaya');
        $table->dropColumn('deskripsi');
      });
    }
}
