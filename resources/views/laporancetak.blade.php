<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
	<style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:750px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:740px;
        }
        td, tr, th{
            padding:12px;
            border:1px solid #333;
            width:185px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
	<center>
		<h4>Laporan Tiket Elektronik Taman Nasional Baluran</h4>
    </center>
    <hr>
    <hr>
    <h6>Periode:{{$startDate}} - {{$endDate}} </h6>
	<table>
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
                <td>{{App\meta_transaksi::total($item->id_data_tiket)}}</td>
                @php
                    $total_qty += $item->total;
                    $semua = $semua + (int)App\meta_transaksi::total($item->id_data_tiket);
                @endphp
            </tr>
            @endforeach
            <tr>
                <td colspan="3"></td>
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

</body>
</html>