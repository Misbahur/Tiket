@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="block-header">
    <h2>Pemesanan Onlien</h2>
    <hr>
</div>
<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Tiket Elektronik
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>QR Code</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Nama Ketua</th>
                                            <th>Email</th>
                                            <th>Negara</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datas as $data)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{!! \QrCode::size(50)->generate($data->barcode) !!}</td>
                                            <td>{{$data->tanggal_transaksi}}</td>
                                            <td>{{$data->name_wisatawan}}</td>
                                            <td>{{$data->email_wisatawan}}</td>
                                            <td>{{ $data->negara_wisatawan }}</td>
                                            <td>
                                            <form action="{{url("online/{$data->id}")}}" method="POST">
                                                <a class="btn btn-info btn-sm" href="{{route('online.show',$data->id_transaksi)}}">
                                                <i class="fa fa-eye"></i>
                                                Show
                                                </a>
                                                <a class="btn btn-success btn-sm" href="{{url("sendemail/$data->id")}}">
                                                <i class="fas fa-pencil-alt"></i>
                                                Verifikasi
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm delete-user" type="submit" onclick="return confirm('Hapus permanen data ini?')">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                                </button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $datas->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Large Size -->
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan
                            vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper.
                            Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                            nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                            Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <div>

@endsection