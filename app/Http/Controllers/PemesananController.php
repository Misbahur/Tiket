<?php

namespace App\Http\Controllers;

use App\data_tiket;
use App\transaksi;
use App\wilayah;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kendaraan = data_tiket::where('nama','like','%Roda%')->get();
        $nusantara['libur'] = data_tiket::select('data_tikets.asuransi as asuransi', 'data_tikets.kode as kode', 'data_tikets.harga as harga','data_tikets.id as id')
            ->where('data_tikets.kode','NL')
            ->first();
        $nusantara['kerja'] = data_tiket::select('data_tikets.asuransi as asuransi', 'data_tikets.kode as kode', 'data_tikets.harga as harga','data_tikets.id as id')
            ->where('data_tikets.kode','N')
            ->first();
        $mancanegara['libur'] = data_tiket::select('data_tikets.asuransi as asuransi', 'data_tikets.kode as kode', 'data_tikets.harga as harga','data_tikets.id as id')
            ->where('data_tikets.kode','ML')
            ->first();
        $mancanegara['kerja'] = data_tiket::select('data_tikets.asuransi as asuransi', 'data_tikets.kode as kode', 'data_tikets.harga as harga','data_tikets.id as id')
            ->where('data_tikets.kode','M')
            ->first();
        $value=$request->tanggal;

        $prov = wilayah::whereRaw('LENGTH(kode)<3')->get(); 
        //
    $array = json_decode(file_get_contents("https://raw.githubusercontent.com/guangrei/Json-Indonesia-holidays/master/calendar.json"),true);

	//check tanggal merah berdasarkan libur nasional
    if(isset($array[$value])){
    //:echo"tanggal merah ".$array[$value]["deskripsi"];
    $hari = 'libur';
    return view('pemesanan', compact('nusantara','mancanegara','hari','kendaraan','prov'));
    }
    //check tanggal merah berdasarkan hari minggu
	elseif(date("D",strtotime($value))==="Sun"){
    //:echo"tanggal merah hari minggu";
    $hari = 'libur';
    return view('pemesanan', compact('nusantara','mancanegara','hari','kendaraan','prov'));
    }
	//bukan tanggal merah
	else{
    //:echo"bukan tanggal merah";
    $hari = 'kerja';
    return view('pemesanan', compact('nusantara','mancanegara','hari','kendaraan','prov'));
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
