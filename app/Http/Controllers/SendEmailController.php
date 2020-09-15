<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use App\transaksi;
use App\meta_transaksi;
use App\wisatawan;
use DB;

class SendEmailController extends Controller
{
    //
    public function index(){
       // $transaksi = 
        $data = array(
            'nama' => 'Misbahur',
            'website' => 'osingtech.net',
            'barcode' => 'TusfendiSrono'
            );
 
		Mail::to("tusfendi@gmail.com")->send(new SendEmail($data));
 
 
		return "Email telah dikirim";
 
	}
	public function edit($id){
	    $transaksi = DB::table('transaksis')->Join('meta_transaksis', 'meta_transaksis.id_transaksi', '=', 'transaksis.id')
        ->Join('wisatawans', 'wisatawans.id_transaksi_meta', '=', 'meta_transaksis.id')
        ->select('transaksis.id as id', 'transaksis.created_at as tanggal_transaksi','transaksis.tanggal_berkunjung', 'transaksis.barcode as barcode', 'wisatawans.nama as name_wisatawan', 'wisatawans.email as email_wisatawan', 'wisatawans.negara as negara_wisatawan', 'meta_transaksis.id_transaksi as id_transaksi')
        ->where('transaksis.id',$id)->first();
        // return $transaksi;
        
        
         $data = Transaksi::find($id);
         $data->status_transaksi = 'terbayar';
         $data->update();
        // dd($ketua);
        
        $total_bayar = DB::table('meta_transaksis')->select(DB::raw('sum(harga*jumlah_tiket) as total'))->where('id_transaksi',$id)->get();
        foreach ($total_bayar as $key => $value) {
            $hasil = $value->total;
        }
        $email = array(
            'nama' => $transaksi->name_wisatawan,
            'tanggal_transaksi' => date("d M Y",strtotime($transaksi->tanggal_transaksi)),
            'tanggal_berkunjung' => date("d M Y",strtotime($transaksi->tanggal_berkunjung)),
            'barcode'=> $transaksi->barcode,
            'negara'=> $transaksi->negara_wisatawan,
            'bayar'=> $hasil
            );
        // dd($email);
		Mail::to($transaksi->email_wisatawan)->send(new SendEmail($email));
 
 
		return "Email telah dikirim";
	}
}
