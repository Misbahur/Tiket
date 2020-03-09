@extends('layouts.master')
<!-- JQuery DataTable Css -->
<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
@section('content')
<div class="container-fluid">
<div class="block-header">
    <h2>KATEGORI</h2>
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
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Nusantara</td>
                                            <td>Rp. 16.000</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt"></i>
                                                Edit
                                                </a>
                                                <button class="btn btn-danger btn-sm delete-user" type="submit">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mancanegara</td>
                                            <td>Rp. 165.000</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt"></i>
                                                Edit
                                                </a>
                                                <button class="btn btn-danger btn-sm delete-user" type="submit">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Roda 2</td>
                                            <td>Rp. 5.000</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt"></i>
                                                Edit
                                                </a>
                                                <button class="btn btn-danger btn-sm delete-user" type="submit">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Roda 4</td>
                                            <td>Rp. 10.000</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt"></i>
                                                Edit
                                                </a>
                                                <button class="btn btn-danger btn-sm delete-user" type="submit">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Roda 6</td>
                                            <td>Rp. 50.000</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt"></i>
                                                Edit
                                                </a>
                                                <button class="btn btn-danger btn-sm delete-user" type="submit">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Shooting Film</td>
                                            <td>Rp. 10.000.000</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt"></i>
                                                Edit
                                                </a>
                                                <button class="btn btn-danger btn-sm delete-user" type="submit">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Preweeding</td>
                                            <td>Rp. 250.000</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="#">
                                                <i class="fas fa-pencil-alt"></i>
                                                Edit
                                                </a>
                                                <button class="btn btn-danger btn-sm delete-user" type="submit">
                                                <i class="fas fa-trash"></i>
                                                Delete
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="btn btn-primary">Add New</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <div>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
@endsection