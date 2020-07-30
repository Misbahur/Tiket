@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="block-header">
    <h2>Data Tiket</h2>
    <hr>
</div>
<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Tiket
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Kategori Hari</th>
                                            <th>Asuransi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($datatiket as $data)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{$data->kode}}</td>
                                            <td>{{$data->nama}}</td>
                                            <td>{{$data->harga}}</td>
                                            <td>{{$data->kategori_hari}}</td>
                                            <td>{{$data->asuransi}}</td>
                                            <td>
                                            <form action="{{ route('datatiket.destroy',$data->id) }}" method="POST">
                                                <a class="btn btn-info btn-sm" href="{{ route('datatiket.edit',$data->id) }}">
                                                <i class="fas fa-pencil-alt"></i>
                                                Edit
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
                                <a href="{{url('datatiket/create')}}" class="btn btn-primary">Add New</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <div>

@endsection