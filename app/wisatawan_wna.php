<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wisatawan_wna extends Model
{
    //
    protected $fillable = ['nama','jenis_klamin','kebangsaan','id_transaksi_meta'];
    protected $table = 'wisatawan_wnas';
    protected $primaryKey = 'id';
}
