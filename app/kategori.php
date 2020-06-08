<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    //
    // protected $table = 'kategoris';
    // protected $primaryKey = 'id';
    protected $fillable = ['kode','nama', 'harga', 'kategori_hari','id_asuransi'];

    public function transaksi(){
        return $this->hasmany('App\transaksi','id_kategori');
    }
}
