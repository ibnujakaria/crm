<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NgerombakTabelOportunities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oportunities', function (Blueprint $table) {
          $table->dropColumn('tahap');
          $table->string('judul', 30)->after('product_id');
          $table->dropColumn('tanggal');
          $table->integer('jumlah_step');
          #<table_name>_<column_name>_foreign
          $table->dropForeign('oportunities_customer_id_foreign');
          $table->dropColumn('customer_id');
          $table->integer('source_id')->unsigned()->after('sales_id');
          $table->foreign('source_id')->references('id')->on('sources');
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
        Schema::table('oportunities', function (Blueprint $table) {
          $table->enum('tahap', ['pengenalan', 'presentasi', 'proposal', 'deal'])->after('product_id');
          $table->dropColumn('judul');
          $table->date('tanggal')->after('tahap');
          $table->dropColumn('jumlah_step');
          $table->integer('customer_id')->unsigned()->after('sales_id');
          $table->dropForeign('oportunities_source_id_foreign');
          $table->dropColumn('source_id');
          $table->dropColumn('created_at');
          $table->dropColumn('updated_at');
        });
    }
}
