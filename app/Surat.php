<?php

namespace desa;

use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    protected $table = 'Surat';

     protected $fillable = ['nama', 'tgl_lahir', 'tmp_lahir','status_perkwnan','gol_darah','pekerjaan','pendidikan','statusku','nik','kk_id','tgl_input','staff_id','dusun','rw','rt'];
}
