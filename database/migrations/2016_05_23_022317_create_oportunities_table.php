<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oportunities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sales_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->enum('tahap', ['pengenalan', 'presentasi', 'proposal', 'deal']);
            $table->date('tanggal');
            $table->double('biaya');
        });

        Schema::table('oportunities', function($table) {
          $table->foreign('sales_id')->references('id')->on('sales');
          $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('oportunities');
    }
}
