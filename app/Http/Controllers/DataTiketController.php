<?php

namespace App\Http\Controllers;

use App\data_tiket;
use Illuminate\Http\Request;

class DataTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datatiket = data_tiket::latest()->paginate(7);

        return view('KategoriTiket.index',compact('datatiket'))
        ->with('i',(request()->input('page', 1) - 1) * 7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('KategoriTiket.add');
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
        $request->validate([
            'kode'=> 'required',
            'nama'=> 'required',
            'harga'=> 'required',
            'kategori_hari'=> 'required',
            'asuransi'=> 'required',
        ]);
        data_tiket::create($request->all());

        return redirect()->route('datatiket.index')
        ->with('Success','Data Tiket created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\data_tiket  $data_tiket
     * @return \Illuminate\Http\Response
     */
    public function show(data_tiket $data_tiket)
    {
        //
        return view('KategoriTiket.show',compact('datatiket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\data_tiket  $data_tiket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datatiket = data_tiket::findOrFail($id);

        return view('KategoriTiket.edit',['datatiket' => $datatiket]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\data_tiket  $data_tiket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'kode'=> 'required',
            'nama'=> 'required',
            'harga'=> 'required',
            'kategori_hari'=> 'required',
            'asuransi'=> 'required',
        ]);
        $data = data_tiket::find($id);
        $data->kode = $request->kode;
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->kategori_hari = $request->kategori_hari;
        $data->asuransi = $request->asuransi;
        $data->save();
        return redirect()->route('datatiket.index')
        ->with('Success','Data Tiket updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\data_tiket  $data_tiket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $datatiket = data_tiket::findOrFail($id);
        $datatiket->delete();
        return redirect()->route('datatiket.index')
        ->with('Success','Data Tiket delete successfully.');
    }
}
