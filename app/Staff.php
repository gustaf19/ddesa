<?php

namespace desa;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function kategoristaf(){
    	return $this->belongsTo('');
    }
}
