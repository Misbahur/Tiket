<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class data_tiket extends Model
{
    //
    protected $fillable = ['kode','nama', 'harga', 'kategori_hari','asuransi'];

    public function transaksi(){
        return $this->hasmany('App\transaksi','id_data_tiket');
    }
}
