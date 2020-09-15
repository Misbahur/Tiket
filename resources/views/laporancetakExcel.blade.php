<center>
    <h4>Laporan Tiket Elektronik Taman Nasional Baluran</h4>
</center>
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