<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    //
    protected $table = 'pembayarans';
    protected $primaryKey = 'id';

    public function transaksi(){
        return $this->hasmany('App\transaksi','id_pembayaran');
    }
}
