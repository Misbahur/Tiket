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
        
        $offline = data_tiket::orderBy('id', 'ASC')->paginate(6);

        return view('offline.index',compact('offline'))
        ->with('i',(request()->input('page', 1) - 1) * 6);
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
        //
        $cekTiket = transaksi::whereDate('tanggal_berkunjung',date("Y-m-d",strtotime($request->tanggal)))->count();
        $cekTiket = $cekTiket+1;
        $bardoce = 'BLR'.date("Ymd",strtotime($request->tanggal)).$cekTiket;
        $transaksi = ([
            'tanggal_berkunjung' => date("Y-m-d",strtotime($request->tanggal)),
            'status_transaksi' => 'proses',
            'id_user' => '0',
            'barcode' => $bardoce,

        ]);
        $lastid = transaksi::create($transaksi)->id;

        $kendaraan = ([
            'id_transaksi' => $lastid,
            'harga' => $request->hargakendaraan,
            'jumlah_tiket' => $request->totalkendaraan,
            'id_data_tiket' => $request->jenis,
        ]);
        $last_id_kendaraan = meta_transaksi::create($kendaraan)->id;

        if($request->totalwni > 0){
            $transaksi_meta_wni = ([
            'id_transaksi' => $lastid,
            'harga' => $request->hargawni,
            'jumlah_tiket' => $request->totalwni,
            'id_data_tiket' => $request->id_tiket_wni,
            ]);
            $id_meta_wni = meta_transaksi::create($transaksi_meta_wni)->id;
        }
        if($request->totalwna > 0){
            $transaksi_meta_wna = ([
            'id_transaksi' => $lastid,
            'harga' => $request->hargawna,
            'jumlah_tiket' => $request->totalwna,
            'id_data_tiket' => $request->id_tiket_wna,
            ]);
            $id_meta_wna = meta_transaksi::create($transaksi_meta_wna)->id;
        }

        if($request->country == "indonesia"){
            $id_transaksi_meta = $id_meta_wni;
        }else{
            $id_transaksi_meta = $id_meta_wna;
        }
        
        $wisatawan = ([
            'nama' => $request->nama_ketua,
            'jenis_kelamin' => $request->jk_ketua,
            'tanggal_lahir' => date("Y-m-d",strtotime($request->tanggal_lahir_ketua)),
            'jenis_identitas' => $request->jenis_identitas_ketua,
            'no_hp' => $request->no_hp_ketua,
            'email' => $request->email_ketua,
            'negara' => $request->country,
            'provinsi' => $request->state,
            'kota' => $request->city,
            'alamat' => $request->alamat_ketua,
            'no_identitas' => $request->no_identitas_ketua,
            'pekerjaan' => $request->pekerjaan_ketua,
            'id_transaksi_meta' => $id_transaksi_meta,
        ]);
        $ketua = wisatawan::create($wisatawan);

        if($request->nama_wni){
            foreach ($request->nama_wni as $key => $value) {
                $wisatawan_wni = array();
                $wisatawan_wni = ([
                    'nama' => $request->nama_wni[$key],
                    'jenis_kelamin' => $request->jk_wni[$key],
                    'tanggal_lahir' => $request->tanggal_lahir_wni[$key],
                    'jenis_identitas' => $request->jenis_identitas_wni[$key],
                    'no_hp' => $request->nohp_wni[$key],
                    'email' => $request->email_wni[$key],
                    'negara' => 'indonesia',
                    'provinsi' => $request->provinsi[$key],
                    'kota' => $request->kota[$key],
                    'no_identitas' => $request->no_identitas_wni[$key],
                    'pekerjaan' => $request->pekerjaan_wni[$key],
                    'id_transaksi_meta' => $id_meta_wni,
                ]);
                $wni = wisatawan_wni::create($wisatawan_wni);
            }
        }

        if($request->nama_wna){

            for ($i=0; $i < count($request->nama_wna)-1; $i++ ) {
                $wisatawan_wna = array();
                $wisatawan_wna = ([
                    'nama' => $request->nama_wna[$i],
                    'jenis_klamin' => $request->jk_wna[$i],
                    'kebangsaan' => $request->kebangsaan_wna[$i],
                    'id_transaksi_meta' => $id_meta_wna,
                ]);
                $wna = wisatawan_wna::create($wisatawan_wna);
            }
        }
        
        dd ($request->all());



        
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
