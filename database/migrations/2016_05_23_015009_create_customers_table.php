<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('customers', function($table){
        $table->increments('id', 50);
        $table->string('nama', 50);
        $table->string('alamat', 50);
        $table->string('provinsi', 50);
        $table->string('kota', 50);
        $table->date('tanggal_lahir');
        $table->string('perusahan', 50);
        $table->string('source', 50);
        $table->enum('status', ['leads', 'customer']);
        // $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('customers');
    }
}
