@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="block-header">
    <h2>TRANSAKSI OFFLINE</h2>
    <hr>
    @include('components.notifikasi')
</div>
<div class="row clearfix" id="app1">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
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
                'PW' => array("color"=>"bg-deep-orange","icon"=>"streetview"),
                'SF' => array("color"=>"bg-grey","icon"=>"movie"),
                'VK' => array("color"=>"bg-blue-grey","icon"=>"shop"),
                'NL' => array("color"=>"bg-red","icon"=>"people"),
                'ML' => array("color"=>"bg-light-blue","icon"=>"people_outline"),
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
                            <div class="tombol">
                            <button type="button" class="btn btn-default waves-effect" v-on:click='TambahBeli($event, "{{$data->nama}}" , "{{$data->harga}}", "{{$data->id}}")'>Tambah</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="text-center">{{ $offline->links() }}</div>
                </div>
            </div>
        </div>
    </div>
<form action="{{route ('offline.store')}}" method="POST" >
    @csrf
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="row clearfix">
                <div class="card">
                    <div class="header">
                        <h4>Detail Transaksi</h4>
                    </div>
                    <div class="body">
                            <table class="table" id="respon-beli">     
                                <tr>
                                    <th>Produk</th>
                                    <th class="text-center">Tiket</th>
                                    <th>Harga</th>
                                    <th>Total</th>
                                    <th>Hapus</th>
                                </tr>
                                <tr v-for="element in elements">
                                    <td>
                                        << element.nama >>
                                    </td>
                                    <td width="25%" class="text-center" >
                                       <i v-on:click="minData(element.index)"  class="fa fa-minus waves-effect"  style="margin-right: 10px;" aria-hidden="true"></i> <input type="number" min="1" v-on:change="inputNumber($event, element.index)" style="width: 50px;" :value="element.tiket" /> <i v-on:click="plusData(element.index)" class="fa fa-plus waves-effect" style="margin-left: 10px;"></i>
                                    </td>

                                    <td>
                                        << element.harga >>
                                    </td>
                                    <td><< element.total >></td>
                                    <td>
                                        <button v-on:click="hapusData(element.index)" class="btn btn-danger">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                            </table>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="card">
                    <div class="body">
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Kuantitas: &nbsp;&nbsp;&nbsp;&nbsp; << kuantitas >></label>
                            
                            <div v-for="element in elements">
                                <input name="id_data_tiket[]" type="hidden" :value="element.index" />
                                <input name="jumlahTiket[]" type="hidden" :value="element.tiket" />
                                <input name="hargaTiket[]" type="hidden" :value="element.harga" />
                                <input name="id_user" type="hidden" value="{{ Auth::user()->id }}">
                                <input name="tanggal_berkunjung" type="hidden" value="{{date("Y-m-d")}}">
                            </div>
                            <div class="col-md-8">
                                {{-- <input type="hidden" id="nominal" name="nominal" class="form-control"> --}}
                                <input type="text" id="show-kuantitas" name="kuantitas" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tiket: &nbsp;&nbsp;&nbsp;&nbsp; << total_tiket >></label>
                            <div class="col-md-8">
                                {{-- <input type="hidden" id="nominal" name="nominal" class="form-control"> --}}
                                <input type="text" id="show-nominal" name="nominal" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Bayar: &nbsp;&nbsp;&nbsp;&nbsp; << total_bayar >></label>
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
    bayar = 0;

    const ListAdd = {
        props:[
            'text'
        ],
        template: `
        <tr>
            <td><< text >></td>
            <td><< harga >></td>
            <td><< index >></td>
            <td></td>
            <td></td>
        </tr>
        `,
    };

    var app1 = new Vue({
        el: "#app1",
        delimiters: ["<<",">>"],
        data:{
            count: 0,
            elements:[],
        },
        methods:{
            TambahBeli: function(event, nama, harga, indexing){

                if(this.elements == ""){
                    this.elements.push({
                   'nama': nama,
                   'harga': harga,
                   'tiket': 1,
                   'index': indexing,
                   'total': harga,
                 });
                }
                else{
                    var indexof =  this.elements.findIndex(i=> i.index == indexing);
                    if (indexof < 0){
                        this.elements.push({
                        'nama': nama,
                        'harga': harga,
                        'index': indexing,
                        'total': harga,
                        'tiket': 1
                     });
                    }
                    else{
                        this.elements[indexof].tiket += 1;
                        const tiket = this.elements[indexof].tiket;
                        const harga = this.elements[indexof].harga;
                        this.elements[indexof].total = tiket*harga;      
                    }
                }
            },
            minData: function(index){
               const indexof = this.elements.findIndex(i => i.index == index);
               this.elements[indexof].tiket -= 1;
               const tiket = this.elements[indexof].tiket;
               const harga = this.elements[indexof].harga;
               if(tiket < 1){
                   this.elements[indexof].tiket = 1;
                   this.elements[indexof].total = harga;
               }
               else{
                this.elements[indexof].total = tiket*harga;
               } 
              
            },
            plusData: function(index){
                const indexof = this.elements.findIndex(i => i.index == index);
               this.elements[indexof].tiket += 1;
               const tiket = this.elements[indexof].tiket;
               const harga = this.elements[indexof].harga;
               this.elements[indexof].total = tiket*harga;
            },
            inputNumber: function(event,index){
                const indexof = this.elements.findIndex(i => i.index == index);
                if (event.target.value < 0){
                    this.elements[indexof].tiket = 0;
                    event.target.value = 0;
                }
                this.elements[indexof].tiket = event.target.value;
                const tiket = this.elements[indexof].tiket;
                const harga = this.elements[indexof].harga;
                this.elements[indexof].total = tiket*harga;
            },
            hapusData: function(index){
                const indexof = this.elements.findIndex(i => i.index == index);
                this.elements.splice(indexof, 1);
                console.log(indexof); 
            },
        },
        computed:{
            kuantitas: function(){
                const kuantitas = this.elements.length ;
                return kuantitas;
            },
            total_tiket: function(){
                var total = 0;
                for(let i=0; i<this.elements.length; i++){
                    total = total + parseInt(this.elements[i].tiket);
                }

                return total;
            },
            total_bayar: function(){
                let total = 0;
                for(let i=0; i<this.elements.length; i++){
                    total = total + parseInt(this.elements[i].total);
                }

                return total;
            }
        }
    })

    function tambah_beli(id, nama, harga)
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

            var semua = jumlah*harga;
			var str = `
			<tr id="beli_` + id + `" class="">
				<input type="hidden" name="id[]" value="` + id + `">
				<input type="hidden" name="harga[]" value="` + harga + `">
				<input type="hidden" id="kuantitas_`+id+`" name="kuantitas[]" value="` + jumlah + `">
				<input type="hidden" name="total[]" value="` + (semua) + `">
				<td>` + nama + `</td>
				<td>` + harga + `</td>
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
        bayar +=(jumlah*harga);


		// $('#nominal').val(total);
		$('#show-nominal').val(total);
		$('#show-kuantitas').val(kuantitas)
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