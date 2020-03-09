@extends('layouts.master')
<!-- JQuery DataTable Css -->
<link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
@section('content')
<div class="container-fluid">
<div class="block-header">
    <h2>LAPORAN</h2>
    <hr>
</div>
<!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                        <h3><span class="label label-info">Range Tanggal</span></h3>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Qty Terjual</th>
                                            <th>Total Penjualan</th>
                                            <th>Asuransi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nusantara</td>
                                            <td>100</td>
                                            <td>Rp. 1.600.000</td>
                                            <td>Rp. 160.000</td>
                                        </tr>
                                        <tr>
                                            <td>Mancanegara</td>
                                            <td>100</td>
                                            <td>Rp. 16.500.000</td>
                                            <td>Rp. 500.000</td>
                                        </tr>
                                        <tr>
                                            <td>Roda 2</td>
                                            <td>100</td>
                                            <td>Rp. 500.000</td>
                                            <td>Rp. 0</td>
                                        </tr>
                                        <tr>
                                            <td>Roda 4</td>
                                            <td>100</td>
                                            <td>Rp. 1.000.000</td>
                                            <td>Rp. 0</td>
                                        </tr>
                                        <tr>
                                            <td>Roda 6</td>
                                            <td>100</td>
                                            <td>Rp. 5.000.000</td>
                                            <td>Rp. 0</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4"></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total :</th>
                                            <th>500</th>
                                            <th>Rp. 24.600.000</th>
                                            <th>Rp. 660.000</th>
                                        </tr>
                                    </tfoot>
                                </table>
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