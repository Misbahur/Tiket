<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_tiket;
use App\transaksi;
use App\meta_transaksi;
use App\wisatawan;
use App\wisatawan_wni;
use App\wisatawan_wna;
use DB;


class TransaksiOnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SELECT transaksis.id, meta_transaksis.id FROM transaksis JOIN meta_transaksis on meta_transaksis.id_transaksi = transaksis.id
        $datas = DB::table('transaksis')->Join('meta_transaksis', 'meta_transaksis.id_transaksi', '=', 'transaksis.id')
        ->Join('wisatawans', 'wisatawans.id_transaksi_meta', '=', 'meta_transaksis.id')
        ->select('transaksis.id as id', 'transaksis.created_at as tanggal_transaksi', 'transaksis.barcode as barcode', 'wisatawans.nama as name_wisatawan', 'wisatawans.email as email_wisatawan', 'wisatawans.negara as negara_wisatawan', 'meta_transaksis.id_transaksi as id_transaksi')
        ->orderBy('wisatawans.id')
        ->paginate(10);
        
        //$online = transaksi::orderBy('id', 'ASC')->paginate(10);

        return view('online.index',compact('datas'))
        ->with('i',(request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // return meta_transaksi::all();
        //  dd ($request->all());
    //     $transaksi = transaksi::create();
    //     $transaksi->tanggal_berkunjung = date("Y-m-d",strtotime($request->tanggal_berkunjung));
    //     $transaksi->status_transaksi = "proses";
    //     $transaksi->id_user = 0;
    //     $transaksi->save();

    //    return $last_transaksi = $transaksi->id;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_transaksi)
    {
        //
        $tiket = DB::table('meta_transaksis')
        ->Join('transaksis', 'transaksis.id', '=', 'meta_transaksis.id_transaksi')
        // ->Join('wisatawans', 'meta_transaksis.id', '=', 'wisatawans.id_transaksi_meta')
        ->Join('data_tikets', 'data_tikets.id', '=', 'meta_transaksis.id_data_tiket')
        ->select('meta_transaksis.*', 
        'data_tikets.nama as nama_tiket', 
        'meta_transaksis.jumlah_tiket as jumlah_tiket',
        'meta_transaksis.harga as harga_tiket'
        )
        ->where('id_transaksi', $id_transaksi)
        ->get();

        // dd($meta->all());
        $ketua = DB::table('meta_transaksis')
        ->Join('transaksis', 'transaksis.id', '=', 'meta_transaksis.id_transaksi')
        ->Join('wisatawans', 'meta_transaksis.id', '=', 'wisatawans.id_transaksi_meta')
        ->select('meta_transaksis.*', 
        'transaksis.created_at as tanggal_transaksi',
        'transaksis.image as image',
        'wisatawans.nama as nama_ketua',
        'wisatawans.negara as kebangsaan_ketua',
        )
        ->where('id_transaksi', $id_transaksi)
        ->get();

        $anggota_wni = DB::table('meta_transaksis')
        ->Join('transaksis', 'transaksis.id', '=', 'meta_transaksis.id_transaksi')
        ->Join('wisatawan_wnis', 'meta_transaksis.id', '=', 'wisatawan_wnis.id_transaksi_meta')
        ->select('meta_transaksis.*', 
        'wisatawan_wnis.nama as nama_wni',
        )
        ->where('id_transaksi', $id_transaksi)
        ->get();

        $anggota_wna = DB::table('meta_transaksis')
        ->Join('transaksis', 'transaksis.id', '=', 'meta_transaksis.id_transaksi')
        ->Join('wisatawan_wnas', 'meta_transaksis.id', '=', 'wisatawan_wnas.id_transaksi_meta')
        ->select('meta_transaksis.*', 
        'wisatawan_wnas.nama as nama_wna',
        )
        ->where('id_transaksi', $id_transaksi)
        ->get();

        return view('online.show', compact('tiket','ketua','anggota_wni','anggota_wna'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $cari = $request->caritiket;
        $data = DB::table('transaksis')->Join('meta_transaksis', 'meta_transaksis.id_transaksi', '=', 'transaksis.id')
        ->Join('wisatawans', 'wisatawans.id_transaksi_meta', '=', 'meta_transaksis.id')
        ->select('transaksis.id as id', 'transaksis.created_at as tanggal_transaksi', 'transaksis.barcode as barcode', 'wisatawans.nama as name_wisatawan', 'transaksis.status_transaksi as status_transaksi','transaksis.image as image','meta_transaksis.jumlah_tiket as jumlah_tiket', 'meta_transaksis.harga as harga')
        ->where('barcode', $cari)->first();

        if(!empty($data)){
        $jumlah = DB::table('meta_transaksis')
        ->where('meta_transaksis.id_transaksi',$data->id)
        ->select(DB::raw("sum(meta_transaksis.jumlah_tiket * meta_transaksis.harga ) as total"))->get();
        return view('statuspemesanan', compact('data','jumlah'));
        }
        else{
        // return view('statuspemesanan', compact('pemesanan'))->with('pemesanan', $cari)->with('success','Berhasil Menemukan data : ' . $request->caritiket);
        return view('statuspemesanan', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        // dd($request->all());
        // $data = transaksi::find($id);
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = $request->barcode.'.'.$request->image->extension();;  
   
        $request->image->move(public_path('bukti'), $imageName);

        $input = array (
            'image'=>$imageName,
        );
        transaksi::where('id',$request->id)->update($input);
   
        return redirect('status?caritiket='.$request->barcode)->with('success','Berhasil Unggah Bukti Transfer : ' . $request->barcode )->with('image',$imageName);;
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
