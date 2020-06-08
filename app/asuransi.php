<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asuransi extends Model
{
    //
    protected $table = 'asuransis';
    protected $primaryKey = 'id';

    public function asuransi(){
        return $this->hasMany('App\transaksi','id_asuransi');
    }
}
