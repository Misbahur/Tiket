@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="block-header">
        <h2>Detail Pemesan</h2>
        <hr>
    </div>

    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Detail Pemesan
                    </h2>
                </div>
                <div class="body">
                    <table class="table">
                        <thead>
                            @foreach ($ketua as $item)
                            <tr>
                                <th>Tanggal Transaksi</th>
                                <td>:</td>
                                <td>{{date("d M Y",strtotime($item->tanggal_transaksi))}}</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Nama Ketua</th>
                                <td>:</td>
                                <td>{{$item->nama_ketua}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Kebangsaan</th>
                                <td>:</td>
                                <td>{{$item->kebangsaan_ketua}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <th scope="row">Tiket</th>
                                <td>:</td>
                            @foreach ($tiket as $item)
                                <td>{{$item->nama_tiket}}, jumlah {{$item->jumlah_tiket}}</td>
                            @endforeach
                            </tr>
                            <tr>
                                <th scope="row">Nama Anggota WNI</th>
                                <td>:</td>
                            @foreach ($anggota_wni as $item)
                                <td>{{$item->nama_wni}}</td>
                            @endforeach
                            </tr>
                            <tr>
                                <th scope="row">Nama Anggota WNA</th>
                                <td>:</td>
                            @foreach ($anggota_wna as $item)
                                <td>{{$item->nama_wna}}</td>
                            @endforeach
                            </tr>
                            <tr>
                                <th scope="row">Jumlah Bayar</th>
                                <td>:</td>
                            @php
                                $total = 0;
                            @endphp
                            @foreach ($tiket as $item)
                                @php
                                    $total += $item->harga_tiket * $item->jumlah_tiket;  
                                @endphp
                            @endforeach
                                <td>Rp.{{number_format($total)}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Bukti Transfer
                    </h2>
                </div>
                <div class="body">
                    @foreach ($ketua as $item)                        
                    <img src="{{asset('/bukti/'.$item->image)}}" alt="Bukti Belum Di up" class="img-fluid img-thumbnail">
                    @endforeach
                </div>
            </div>
        </div>
    </div>


{{-- <div>{{$item->jumlah_tiket}}</div>
{{-- <div>{{$item->nama_ketua}}</div> --}}


{{-- <div>{{$item->tanggal_transaksi}}</div> --}}

</div>


@endsection