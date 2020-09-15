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
            <div class="row clearfix" id="app1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <form id="getDate" action="{{ url('laporan') }}" method="GET">
                            <table>
                                <tr>
                                    <th style="width: 15%">Range Tanggal</th>
                                    <td style="width: 35%">
                                        <div id="reportrange" class="pull-center form-control" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                            <span></span> <b class="caret"></b>
                                            
                                        </div>
                                    </td>
                                    <td style="width: 25%; padding-left: 10px;">
                                        
                                        <input type="hidden" value="" name="startDate" />
                                        <input type="hidden" value="" name="endDate" />
                                        <button type="submit" class="btn btn-primary waves-effect" id="submit">
                                            <i class="material-icons">search</i>
                                        </button>
                                    </td>
                                    <td style="padding-left: 200px">
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn bg-amber dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="material-icons">print</i>
                                                <span class="caret"></span>

                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a id="cetakpdf" class="waves-effect btn btn-primary" type="button">PDF</a></li>
                                                <li><a id="exportexcel" class="waves-effect btn btn-success">EXCEL</a></li>
                                            </ul>
                                        </div>
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

                                        @foreach ($datas as $item)                                            
                                        <tr>
                                            <td>{{$item->nama_tiket}}</td>
                                            <td>{{$item->total}}</td>
                                            <td>Rp.{{number_format(App\meta_transaksi::total($item->id_data_tiket))}}</td>
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
                                        <th>Rp.{{number_format($semua)}}</th>
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
                    var start = moment();
                    var end = moment();
                    var startDate = getUrlParameter('startDate');
                    var endDate = getUrlParameter('endDate');
                    console.log(start);
                
                if (startDate == null && endDate == null){
                    start = moment();
                    end = moment();
                }
                else {  
                    start = moment(new Date(String(startDate)));
                    end = moment(new Date(String(endDate)));
                }
                   function cb(start, end) {
                        $('#reportrange span').html(start.format('D MMMM YYYY') + ' - ' + end.format('D MMMM YYYY'));
                        document.getElementsByName('startDate')[0].value = start.format('YYYY-MM-DD');
                        document.getElementsByName('endDate')[0].value = end.format('YYYY-MM-DD');
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
                   function getUrlParameter(sParam) {
                    var sPageURL = window.location.search.substring(1),
                        sURLVariables = sPageURL.split('&'),
                        sParameterName,
                        i;

                    for (i = 0; i < sURLVariables.length; i++) {
                        sParameterName = sURLVariables[i].split('=');

                        if (sParameterName[0] === sParam) {
                            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                        }
                    }
                };
                    document.getElementById('cetakpdf').addEventListener('click', function(){
                        let dateRange = "?startDate=" + String(start.format('YYYY-MM-DD')) + "&endDate=" + String(end.format('YYYY-MM-DD'));

                        location.href = "{{ route ('getPDF')}}" + dateRange;
                        // console.log(start.format('YYYY-MM-DD'));
                        // location.href="{{route ('getPDF')}}"+dateRange;
                    })
                    document.getElementById('exportexcel').addEventListener('click', function(){
                        let dateRange = "?startDate=" + String(start.format('YYYY-MM-DD')) + "&endDate=" + String(end.format('YYYY-MM-DD'));

                        location.href = "{{ route ('getCSV')}}" + dateRange;
                        // console.log(start.format('YYYY-MM-DD'));
                        // location.href="{{route ('getPDF')}}"+dateRange;
                    })
                    </script>
                   

@endsection