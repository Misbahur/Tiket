@extends('layouts.master')
@section('content')
 <!-- Bootstrap DatePicker Css -->
 <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://momentjs.com/downloads/moment.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
 <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
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
                            <form id="getDate" action="{{ url('laporan') }}" method="GET">
                            <table>
                                <tr>
                                    <th>Range Tanggal</th>
                                    <td style="padding-left: 10px;">
                                        <div id="reportrange" class="pull-center form-control" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                            <span></span> <b class="caret"></b>
                                        </div>
                                    </td>
                                    <td style="padding-left: 10px;">
                                        <button type="submit" class="btn btn-primary waves-effect" id="submit">
                                            <i class="material-icons">search</i>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Qty Terjual</th>
                                            <th>Total Penjualan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @php
                                        $semua = 0;
                                        $total_qty = 0;
                                         @endphp

                                        @foreach ($data as $item)                                            
                                        <tr>
                                            <td>{{$item->nama_tiket}}</td>
                                            <td>{{$item->total}}</td>
                                            <td>{{App\meta_transaksi::total($item->id_data_tiket)}}</td>
                                            @php
                                                $total_qty += $item->total;
                                                $semua = $semua + (int)App\meta_transaksi::total($item->id_data_tiket);
                                            @endphp
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="4"></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total :</th>
                                            <th>{{$total_qty}}</th>
                                        <th>{{$semua}}</th>
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
                <script type="text/javascript">
                    var start = moment().subtract(29, 'days');
                    var end = moment();

                    function cb(start, end) {
                        $('#reportrange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
                    }

                    $('#reportrange').daterangepicker({
                        startDate: start,
                        endDate: end,
                        ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                        }
                    }, cb);

                    cb(start, end);
                    $('.applyBtn').click(function(){
                        console.log(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
                    });
                    
                    </script>
<!-- Moment Plugin Js -->
<script src="plugins/momentjs/moment.js"></script>
<!-- Bootstrap Datepicker Plugin Js -->
<script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
@endsection