<?php

namespace desa;

use Illuminate\Database\Eloquent\Model;

class KategoriStaff extends Model
{
    protected $table='';
    public function staf()
    {
    	return $this->hasmany('app\staf');
    }
}
