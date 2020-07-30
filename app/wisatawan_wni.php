<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wisatawan_wni extends Model
{
    //
    protected $fillable = ['nama','jenis_kelamin','tanggal_lahir','jenis_identitas','no_hp','email','negara','provinsi','kota','no_identitas','pekerjaan','id_transaksi_meta'];
    protected $table = 'wisatawan_wnis';
    protected $primaryKey = 'id';
}
