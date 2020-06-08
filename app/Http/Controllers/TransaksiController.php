<?php

namespace App\Http\Controllers;

use App\User;
use App\pembayaran;
use App\asuransi;
use App\kategori;
use App\transaksi;
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
        $offline = kategori::orderBy('id', 'ASC')->paginate(7);
        $asuransi = asuransi::all();

        return view('offline.index',compact('offline','asuransi'))
        ->with('i',(request()->input('page', 1) - 1) * 7);
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
        return $request;
        //
        // $request->validate([
        //     'nama'=> 'required',
        //     'harga'=> 'required',
        //     'kategori_hari'=> 'required',
        // ]);
        // kategori::create($request->all());

        // return redirect()->route('transaksi.index')->with('success','Berhasil menambahkan User : ' . $request->username );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(transaksi $transaksi)
    {
        //
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
