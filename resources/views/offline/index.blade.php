@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="block-header">
    <h2>TRANSAKSI OFFLINE</h2>
    <hr>
</div>
<div class="row clearfix">
    <div class="col-lg-6 col-md-8 col-sm-8 col-xs-8">
        <div class="card">
            <div class="header">
                <h2>
                    Transaksi Tiket
                </h2>
            </div>
            <?php 
            $desain = [
                'N' => array("color"=>"bg-red","icon"=>"people"),
                'M' => array("color"=>"bg-light-blue","icon"=>"people_outline"),
                'R4' => array("color"=>"bg-blue","icon"=>"directions_car"),
                'R6' => array("color"=>"bg-lime","icon"=>"local_taxi"),
                'R2' => array("color"=>"bg-light-green","icon"=>"directions_bike"),
                '' => array("color"=>"bg-deep-orange","icon"=>"streetview"),
                '' => array("color"=>"bg-grey","icon"=>"movie"),
                '' => array("color"=>"bg-blue-grey","icon"=>"shop"),
        ];
            //$color = ["bg-red","bg-light-blue","bg-blue","bg-lime","bg-light-green","bg-deep-orange","bg-grey","bg-blue-grey"];
            //$icon = ["people","people_outline","directions_car","local_taxi","directions_bike","streetview","movie","shop"];
            // $m = 'M';
            // echo $desain[$m]['icon'];
            ?>
            <div class="body">
                <div class="row">
                    @foreach($offline as $i => $data) 
                    
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="info-box <?php echo $desain["$data->kode"]["color"]; ?> hover-zoom-effect">
                            <div class="icon">
                                <i class="material-icons"><?php echo $desain["$data->kode"]["icon"]; ?></i>
                            </div>
                            <div class="content">
                                <div class="text"><h4>{{$data->nama}}</h4></div>
                                <div class="h4">{{$data->harga}}</div>
                            </div>
                            @foreach($asuransi as $dat)
                                <div class="p asuransi">@if ($dat->id == $data->id_asuransi)
                                    <?php $harga = $dat->harga ?>
                                    {{$harga}}
                                @endif</div>
                                @endforeach
                            <div class="tombol">
                                <button type="button" class="btn btn-default waves-effect" onclick="tambah_beli('<?=$data->id?>', '<?=$data->nama?>', '<?=$data->harga?>', '<?=$harga?>')">Tambah</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <form action=""></form>
    @csrf
        <div class="col-lg-6 col-md-4 col-sm-4 col-xs-4">
            <div class="row clearfix">
                <div class="card">
                    <div class="header">
                        <h4>Detail Transaksi</h4>
                    </div>
                    <div class="body">
                            <table class="table" id="respon-beli">     
                                <tr>
                                    <td>Produk</td>
                                    <td>Tiket</td>
                                    <td>Asuransi</td>
                                    <td>Kuantitas</td>
                                    <td>Total</td>
                                    <td>Hapus</td>
                                </tr>
                            </table>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="card">
                    <div class="body">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Kuantitas</label>
                            <div class="col-md-8">
                                {{-- <input type="hidden" id="nominal" name="nominal" class="form-control"> --}}
                                <input type="text" id="show-kuantitas" name="kuantitas" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tiket</label>
                            <div class="col-md-8">
                                {{-- <input type="hidden" id="nominal" name="nominal" class="form-control"> --}}
                                <input type="text" id="show-nominal" name="nominal" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Asuransi</label>
                            <div class="col-md-8">
                                {{-- <input type="hidden" id="nominal" name="nominal" class="form-control"> --}}
                                <input type="text" id="show-asuransi" name="totasuransi" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Bayar</label>
                            <div class="col-md-8">
                                {{-- <input type="hidden" id="nominal" name="nominal" class="form-control"> --}}
                                <input type="text" id="show-bayar" name="totakhir" class="form-control" disabled>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        <a href="{{route('offline.index')}}" class="btn btn-sm btn-danger mb-2">KEMBALI</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</div>
<script type="text/javascript">
	total = 0;
	kuantitas = 0;
    totasuransi = 0;
    bayar = 0;

    function tambah_beli(id, nama, harga, asuransi)
	{	
		
		if( $('#respon-beli #beli_' + id).length > 0 )
		{
			input = parseInt($('#kuantitas_' + id).val());
			total -= (input*harga);
			kuantitas -= input;
			jumlah = input + 1;
			$('#respon-beli #beli_' + id).remove();	

		}else{
			jumlah = 1;
		}

            var jumhar = jumlah*harga;
            var jumas  = jumlah*asuransi;
            var semua  = jumhar+jumas;
			var str = `
			<tr id="beli_` + id + `" class="">
				<input type="hidden" name="id[]" value="` + id + `">
				<input type="hidden" name="harga[]" value="` + harga + `">
				<input type="hidden" name="asuransi[]" value="` + asuransi + `">
				<input type="hidden" id="kuantitas_`+id+`" name="kuantitas[]" value="` + jumlah + `">
				<input type="hidden" name="total[]" value="` + (jumlah*harga) + `">
				<td>` + nama + `</td>
				<td>` + harga + `</td>
				<td>` + asuransi + `</td>
				<td>` + jumlah + `</td>
				<td>` + semua + `</td>	
                <td>
					<div class="tools">
						<button onclick="hapus_beli(` + id + `, '` + (jumlah*harga) + `', '` + jumlah + `')">Hapus</button>
					</div>
				</td>	
			</tr>
		`;

		total += (jumlah*harga);
		kuantitas += jumlah;
        totasuransi +=jumas;
        bayar +=semua;


		// $('#nominal').val(total);
		$('#show-nominal').val(total);
		$('#show-kuantitas').val(kuantitas)
        $('#show-asuransi').val(totasuransi);
        $('#show-bayar').val(bayar);

		$('#respon-beli').append(str);
		if($('#respon-beli').html() != '')
		{
			$('#respon-beli').removeAttr('style');
		}
	}
    function hapus_beli(id,total_produk,kuantitas_produk)
	{
		$('#respon-beli #beli_' + id).remove();
		total -= total_produk;
		kuantitas -= kuantitas_produk;

		$('#show-kuantitas').val(kuantitas);
		$('#show-nominal').val(total);

		if($('#respon-beli').html() == '')
		{
			$('#respon-beli').attr('style', 'display: none');
		}		
	}
</script>
@endsection