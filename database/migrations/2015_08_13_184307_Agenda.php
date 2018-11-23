<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Agenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Agenda
        Schema::create('agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->string('isi_agenda',50);
            $table->date('tgl_agenda');
            $table->string('rujukan_agenda');
            $table->integer('kategori_id');
            $table->string('agend',50);
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
        Schema::drop('agenda');
    }
    
}
