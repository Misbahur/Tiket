<?php

namespace App\Http\Controllers;

use App\kategori;
use App\asuransi;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('kategori');
        $kategori = kategori::latest()->paginate(7);

        return view('KategoriTiket.index',compact('kategori'))
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
        $asuransi = asuransi::all();
        return view('KategoriTiket.add', compact('asuransi'));
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
        ]);
        kategori::create($request->all());

        return redirect()->route('kategori.index')
        ->with('Success','Kategori created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(kategori $kategori)
    {
        //
        return view('KategoriTiket.show',compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori $kategori)
    {
        $asuransi = asuransi::all();
        return view('KategoriTiket.edit',compact('kategori','asuransi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori $kategori)
    {
        //
        $request->validate([
            'nama'=> 'required',
            'harga'=> 'required',
            'kategori_hari'=> 'required',
        ]);

        $kategori->update($request->all());
  
        return redirect()->route('kategori.index')
        ->with('Success','Kategori updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori $kategori)
    {
        //
        $kategori->delete();
        return redirect()->route('kategori.index')
        ->with('Success','Kategori delete successfully.');
    }
}
