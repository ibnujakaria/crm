<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSomeColumsToSales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales', function (Blueprint $table) {
          $table->string('email', 30)->after('id');
          $table->string('password', 200)->after('email');
          $table->rememberToken();
          $table->string('jenis_kelamin', 1)->change();
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
        Schema::table('sales', function (Blueprint $table) {
          $table->dropColumn('email');
          $table->dropColumn('password');
          $table->dropColumn('remember_token');
          $table->dropColumn('created_at');
          $table->dropColumn('updated_at');
        });
    }
}
