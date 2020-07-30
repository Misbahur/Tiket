<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wisatawan extends Model
{
    //
    protected $fillable = ['nama','jenis_kelamin','tanggal_lahir','jenis_identitas','no_hp','email','negara','provinsi','kota','alamat','no_identitas','pekerjaan','id_transaksi_meta'];
    protected $table = 'wisatawans';
    protected $primaryKey = 'id';
}
