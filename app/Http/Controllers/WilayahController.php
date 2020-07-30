<?php

namespace App\Http\Controllers;

use App\wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kota(Request $request)
    {
        // $kota = wilayah::all()->where('kode','like',"$request->provinsi%")->where('LENGTH(kode)<6')->pluck("nama","kode");
        $kota = wilayah::where('kode','like',"$request->provinsi%")->whereRaw('LENGTH(kode)<6')->pluck("nama","kode");
        return json_encode($kota);
    }

}
