<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductIdDiTabelOportunities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oportunities', function (Blueprint $table) {
          $table->integer('product_id')->unsigned()->after('customer_id');
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
        Schema::table('oportunities', function (Blueprint $table) {
          $table->dropForeign('oportunities_product_id_foreign');
          $table->dropColumn('product_id');
        });
    }
}
