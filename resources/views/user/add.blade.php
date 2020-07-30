@extends('layouts.master')
<!-- Bootstrap Select Css -->
<link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" />
@section('content')
<div class="container-fluid">
<div class="block-header">
    <h2>USER</h2>
    <hr>
</div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Tambah User</h2>
                </div>
                <div class="body">
                    {{-- <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> --}}
                    <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row clearfix m-l-10 m-r-10">
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">{{ __('Nama Lengkap') }}</label>
                                    <div class="form-line">
                                        <input type="text" id="fullname" class="form-control @error('fullname') is-invalid @enderror" name="fullname" placeholder="Nama Lengkap" value="{{Request::input("fullname")}}" autocomplete="true" autofocus required>
                                        
                                        @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">Username</label>
                                    <div class="form-line">
                                        <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{Request::input("username")}}" autocomplete="true" autofocus required>

                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">No Hp</label>
                                    <div class="form-line">
                                        <input type="tel" id="nohp" class="form-control @error('nohp') is-invalid @enderror" name="nohp" placeholder="No Hp" value="{{Request::input("nohp")}}" autocomplete="true" autofocus required>

                                        @error('nohp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">Email</label>
                                    <div class="form-line">
                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{Request::input("email")}}">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-line">
                                        <input type="Password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" value="{{Request::input("password")}}">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">Komfirmasi Password</label>
                                    <div class="form-line">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">Level User</label>
                                    <select class="form-control show-tick @error('level_user') is-invalid @enderror" name="level_user" required>
                                        <option value="">-- Pilih Jabatan --</option>
                                        <option value="kepala">Kepala Balai</option>
                                        <option value="petugas">Petugas Tiket</option>
                                        <option value="koordinator">Koordinator Tiket</option>
                                        <option value="it">Bidang IT</option>
                                    </select>

                                    @error('level_user')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                </div>
                            </div>
                        </div>
                        <div class="m-l-20">
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        <a href="{{route('users.index')}}" class="btn btn-sm btn-danger mb-2">KEMBALI</a>
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