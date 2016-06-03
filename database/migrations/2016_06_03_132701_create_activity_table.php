<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('oportunity_id');
            $table->string('nama');
            $table->integer('biaya');
            $table->string('deskripsi', 300);
            $table->enum('status', ['wacana', 'progress', 'selesai']);
            $table->datetime('wacana_at');
            $table->datetime('progress_at');
            $table->datetime('selesai_at');
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
        Schema::drop('activities');
    }
}
