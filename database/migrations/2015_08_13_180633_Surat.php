<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Surat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Surat
        Schema::create('surat', function (Blueprint $table){
            $table->increments('id');
            $table->integer('penduduk_id');
            $table->string('isi_surat',255);
            $table->date('tgl_surat');
            $table->integer('kategori_id');
            $table->integer('staff_id');
            $table->integer('ttd_id');
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
        Schema::drop('surat');
    }
}
