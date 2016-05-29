<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sales_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('qty');
            $table->double('total_harga');
            $table->date('tanggal');
            $table->enum('status', ['dibayar', 'belum']);
            // $table->timestamps();
        });

        Schema::table('transactions', function($table) {
          $table->foreign('sales_id')->references('id')->on('sales');
          $table->foreign('customer_id')->references('id')->on('customers');
          $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transactions');
    }
}
