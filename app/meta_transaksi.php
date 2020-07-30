<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class meta_transaksi extends Model
{
    //
    protected $fillable = [
        'jumlah_tiket', 'id_transaksi', 'harga','id_data_tiket',
    ];
    protected $table = 'meta_transaksis';
    protected $primaryKey = 'id';

    public static function total($id){
        $total = DB::table('meta_transaksis')->select(DB::raw('sum(harga*jumlah_tiket) as total'))->where('id_data_tiket',$id)->get();
        foreach ($total as $key => $value) {
            $hasil = $value->total;
        }
        return $hasil;
    }
}
