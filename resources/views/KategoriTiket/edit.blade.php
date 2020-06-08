@extends('layouts.master')
<!-- Bootstrap Select Css -->
<link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@section('content')
<div class="container-fluid">
<div class="block-header">
    <h2>KATEGORI</h2>
    <hr>
</div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Edit Data Tiket</h2>
                </div>
                <div class="body">
                    {{-- <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> --}}
                    <form action="{{route('kategori.update',[$kategori->id])}}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                  <input type="text" class="form-control" name="kode" value="{{$kategori->kode}}" required>
                                  <label class="form-label">Kode Tiket</label>
                                </div>
                                <div class="help-info">Huruf Depan Perkata</div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                  <input type="text" class="form-control" name="nama" value="{{$kategori->nama}}" required>
                                  <label class="form-label">Nama Tiket</label>
                                </div>
                                <div class="help-info">Min. Value: 5, Max. Value: 25</div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                  <input type="text" class="form-control" name="harga" value="{{$kategori->harga}}" required>
                                  <label class="form-label">Harga Tiket</label>
                                </div>
                                <div class="help-info">contoh : 15000</div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control show-tick" name="kategori_hari" required>
                                <option value="libur" {{ 'libur' == $kategori->kategori_hari? 'selected' : '' }}>Libur</option>
                                <option value="kerja" {{ 'kerja' == $kategori->kategori_hari? 'selected' : '' }}>Kerja</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <select class="form-control show-tick" name="id_asuransi" required>
                                <option value="">-- Pilih Asuransi --</option>
                                @foreach ($asuransi as $data)
                                    <option value="{{$data->id}}"{{ $data->id == $kategori->id_asuransi? 'selected' : '' }}>{{$data->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        <a href="{{route('kategori.index')}}" class="btn btn-sm btn-danger mb-2">kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Custom Js -->
<script src="{{ ASSET('js/admin.js')}}"></script>
<script src="{{ ASSET('js/pages/forms/basic-form-elements.js')}}"></script>
@endsection