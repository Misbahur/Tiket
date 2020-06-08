<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    //
    protected $table = 'transaksis';
    protected $primaryKey = 'id';

    public function asuransi(){
        // return $this->belongsTo('App\asuransi');
        return $this->belongsTo('App\asuransi','id','id_asuransi');
    }
    public function pembayaran(){
        return $this->belongsTo('App\pembayaran', 'id');
    }
    public function user(){
        return $this->belongsTo('App\User', 'id');
    }
    public function kategori(){
        return $this->belongsTo('App\kategori', 'id');
    }
}
