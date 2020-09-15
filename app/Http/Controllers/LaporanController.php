<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\laporan;
use App\data_tiket;
use App\transaksi;
use App\meta_transaksi;
use App\Exports\ExportLaporans;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use PDF;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        
        $data = meta_transaksi::
        join('data_tikets', 'data_tikets.id' ,'=', 'meta_transaksis.id_data_tiket')
        ->select('data_tikets.nama as nama_tiket',DB::raw('sum(jumlah_tiket) as total, meta_transaksis.id_data_tiket'))
        ->groupBy('id_data_tiket');

        if($request->startDate != ''){
            $data = $data->whereDate('meta_transaksis.created_at','>=',$request->startDate);        
        }
        if($request->endDate != ''){
            $data = $data->whereDate('meta_transaksis.created_at','<=',$request->endDate);        
        }
        $data = $data->orderBy('meta_transaksis.created_at','desc')
        ->paginate(10);
        return view('laporan', ['datas' => $data->appends(['startDate' => $request->startDate,'endDate' => $request->endDate])]);
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
     * @param  \App\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(laporan $laporan)
    {
        //
    }

    public function getPDF(Request $request)
    {
        # code...
        
        $data = meta_transaksi::
        join('data_tikets', 'data_tikets.id' ,'=', 'meta_transaksis.id_data_tiket')
        ->select('data_tikets.nama as nama_tiket',DB::raw('sum(jumlah_tiket) as total, meta_transaksis.id_data_tiket'))
        ->groupBy('id_data_tiket');
        
        if($request->startDate != ''){
            $data = $data->whereDate('meta_transaksis.created_at','>=',$request->startDate);        
        }
        if($request->endDate != ''){
            $data = $data->whereDate('meta_transaksis.created_at','<=',$request->endDate);        
        }
        $data = $data->orderBy('meta_transaksis.created_at','desc')
        ->paginate(10);
        $start = date("d F Y", strtotime($request->startDate));
        $end = date("d F Y", strtotime($request->endDate));
        $pdf = PDF::loadview('laporancetak', ['datas' => $data->appends(['startDate' => $request->startDate,'endDate' => $request->endDate]), 'startDate' => $start,'endDate' => $end]);
        return $pdf->stream();
    }
    public function getCSV(Request $request)
    {
        # code...
        
        $data = meta_transaksi::
        join('data_tikets', 'data_tikets.id' ,'=', 'meta_transaksis.id_data_tiket')
        ->select('data_tikets.nama as nama_tiket',DB::raw('sum(jumlah_tiket) as total, meta_transaksis.id_data_tiket'))
        ->groupBy('id_data_tiket');
        
        if($request->startDate != ''){
            $data = $data->whereDate('meta_transaksis.created_at','>=',$request->startDate);        
        }
        if($request->endDate != ''){
            $data = $data->whereDate('meta_transaksis.created_at','<=',$request->endDate);        
        }
        $data = $data->orderBy('meta_transaksis.created_at','desc')->get();
        $start = date("d F Y", strtotime($request->startDate));
        $end = date("d F Y", strtotime($request->endDate));
        $filename = 'Laporan'.$start.'-'.$end.'.xlsx';
        return Excel::download(new ExportLaporans($data, $start, $end), $filename);
        
    }
}
