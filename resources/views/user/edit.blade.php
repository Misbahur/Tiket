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
                    <h2>Edit User</h2>
                </div>
                <div class="body">
                    {{-- <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> --}}
                    <form action="{{route('users.update',[$users->id])}}" method="POST" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="row clearfix m-l-10 m-r-10">
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">Nama Lengkap</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap" value="{{$users->fullname}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">Username</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="username" placeholder="Username" value="{{$users->username}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">No Hp</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nohp" placeholder="No Hp" value="{{$users->nohp}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">Email</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email" placeholder="Email" value="{{$users->email}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">Password</label>
                                    <div class="form-line">
                                        <input type="Password" class="form-control" name="password" placeholder="password" value="{{$users->password}}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-gorup">
                                    <label class="col-form-label">Level User</label>
                                    <select class="form-control show-tick" name="level_user" required>
                                        <option value="kepala" {{ 'kepala' == $users->level_user? 'selected' : '' }}>Kepala Balai</option>
                                        <option value="petugas" {{ 'petugas' == $users->level_user? 'selected' : '' }}>Petugas Tiket</option>
                                        <option value="koordinator" {{ 'koordinator' == $users->level_user? 'selected' : '' }}>Koordinator Tiket</option>
                                        <option value="it" {{ 'it' == $users->level_user? 'selected' : '' }}>Bidang IT</option>
                                    </select>
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