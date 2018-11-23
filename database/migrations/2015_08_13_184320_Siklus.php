<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Siklus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('siklus',function(Blueprint $table){
            $table->increments('id');
            $table->integer('penduduk_id');
            $table->date('tgl');
            $table->integer('kategori_siklus_id');
            $table->integer('staff_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('siklus');
    }
}
