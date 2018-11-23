<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Penduduk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('penduduk',function(Blueprint $table){
                $table->increments('id');
                $table->string('nama',100);
                $table->date('tgl_lahir');
                $table->string('tmp_lahir',20);
                $table->enum('status_perkwnan',['belum kawin','kawin','cerai hidup','cerai mati']);
                $table->enum('gol_darah',['a','b','ab','o']);
                $table->string('pekerjaan',100);
                $table->string('pendidikan',50);
                $table->string('statusku',50);
                $table->string('nik',20);
                $table->integer('kk_id');
                $table->date('tgl_input');
                $table->integer('staff_id');
				$table->string('alamat',30);
                $table->string('dusun',5);
                $table->string('rw',5);
                $table->string('rt',5);
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
        Schema::drop('penduduk');
    }
}
