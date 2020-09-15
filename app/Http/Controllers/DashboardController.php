<?php

namespace App\Http\Controllers;

use App\dashboard;
use App\data_tiket;
use App\transaksi;
use App\meta_transaksi;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = data_tiket::
        leftjoin('meta_transaksis','meta_transaksis.id_data_tiket' ,'=', 'data_tikets.id')
        ->leftjoin('transaksis','transaksis.id','=','meta_transaksis.id_transaksi')
        ->select('data_tikets.id as id','data_tikets.kode as kode','data_tikets.nama as nama_tiket',DB::raw('sum(jumlah_tiket) as total, meta_transaksis.id_data_tiket','transaksis.status_transaksi as status'))
        ->groupBy('id')
        // ->where('status_transaksi','terbayar')
        ->get();

        $nama_tiket = [];
        $total = [];

        foreach ($data as $item){
            $nama_tiket[] = $item->nama_tiket;
            $total[] = $item->total;
        }
        return view('dashboard',['data' => $data, 'nama_tiket' => $nama_tiket, 'total_tiket' => $total]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
