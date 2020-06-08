@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="block-header">
    <h2>USER</h2>
    <hr>
</div>
<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data User
                            </h2>
                        </div>
                        <div class="body">
                            <a href="{{url("users/create")}}" class="btn btn-primary  float-right m-b-15">
                                <i class="fas fa-plus"></i> Tambah Data
                            </a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>No Hp</th>
                                            <th>Level User</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $data)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{$data->fullname}}</td>
                                            <td>{{$data->username}}</td>
                                            <td>{{$data->email}}</td>
                                            <td>{{$data->nohp}}</td>
                                            <td>{{$data->level_user}}</td>
                                            <td>
                                            <form action="{{url("users/{$data->id}")}}" method="post">
                                                <a class="btn btn-info btn-sm" href="{{url("users/{$data->id}/edit")}}">
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
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <div>

@endsection