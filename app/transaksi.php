<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    //
    protected $fillable = [
        'tanggal_berkunjung', 'status_transaksi', 'id_user','barcode','image',
    ];
    protected $table = 'transaksis';
    protected $primaryKey = 'id';

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
