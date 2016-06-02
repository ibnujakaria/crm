<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCoverToProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('products', function($table) {
        $table->string('cover', 100);
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
      Schema::table('products', function($table) {
        $table->dropColumn('cover');
        $table->dropColumn('created_at');
        $table->dropColumn('updated_at');
      });
    }
}
