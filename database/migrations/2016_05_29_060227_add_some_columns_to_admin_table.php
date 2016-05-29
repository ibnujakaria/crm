<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeColumnsToAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('admin', function($table) {
        $table->string('password', 200);
        $table->rememberToken();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('admin', function($table) {
        $table->dropColumn('password');
        $table->dropColumn('remember_token');
      });
    }
}
