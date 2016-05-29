<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::rename('customers', 'sources');
      Schema::table('sources', function($table) {
        $table->dropColumn('provinsi');
        $table->dropColumn('kota');
        $table->dropColumn('perusahan');
        $table->dropColumn('source');
        $table->string('email', 30)->after('nama');
        $table->string('sumber', 30)->after('email');
        $table->string('nama_perusahaan', 30)->after('sumber');
        $table->string('industri', 30)->after('nama_perusahaan');
        $table->string('jenis_kelamin', 30);
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
      Schema::rename('sources', 'customers');
    }
}
