<?php

namespace App\Http\Controllers;


use App\User;
use App\data_tiket;
use App\transaksi;
use App\meta_transaksi;
use App\wisatawan;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $offline = data_tiket::orderBy('id', 'ASC')->paginate(12);

        return view('offline.index',compact('offline'))
        ->with('i',(request()->input('page', 1) - 1) * 12);
        //return view('offline.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('offline.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd ($request->all());
        //
        $cekTiket = transaksi::whereDate('tanggal_berkunjung',date("Y-m-d",strtotime($request->tanggal)))->count();
        $cekTiket = $cekTiket+1;
        $bardoce = 'BLR'.date("Ymd",strtotime($request->tanggal)).$cekTiket;
        $transaksi = ([
            'tanggal_berkunjung' => date("Y-m-d",strtotime($request->tanggal)),
            'status_transaksi' => 'terbayar',
            'id_user' => $request->id_user,
            'barcode' => $bardoce,

        ]);
        $lastid = transaksi::create($transaksi)->id;
        
        if($request->id_data_tiket){
            foreach ($request->id_data_tiket as $key => $value) {
            $data = array();
            $data = ([
            'id_transaksi' => $lastid,
            'harga' => $request->hargaTiket[$key],
            'jumlah_tiket' => $request->jumlahTiket[$key],
            'id_data_tiket' => $request->id_data_tiket[$key],
        ]);
        $last_id_kendaraan = meta_transaksi::create($data)->id;
            }
        }
        
         return redirect()->route('offline.index')->with('success','Berhasil melakukan transaksi');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(transaksi $transaksi)
    {
        //
    }
}
