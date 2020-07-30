@extends('layouts.front')
@section('frontcontent')
<style>
  .box {
  position: relative;
  background: #ffffff;
  width: 100%;
}
.box-header {
  color: #444;
  display: block;
  padding: 10px;
  position: relative;
  border-bottom: 1px solid #f4f4f4;
  margin-bottom: 10px;
}
.box-tools {
  position: absolute;
  right: 10px;
  top: 5px;
}
.dropzone-wrapper {
  border: 2px dashed #91b0b3;
  color: #92b0b3;
  position: relative;
  height: 150px;
}
.dropzone-desc {
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  text-align: center;
  width: 40%;
  top: 50px;
  font-size: 16px;
}
.dropzone,
.dropzone:focus {
  position: absolute;
  outline: none !important;
  width: 100%;
  height: 150px;
  cursor: pointer;
  opacity: 0;
}
.dropzone-wrapper:hover,
.dropzone-wrapper.dragover {
  background: #ecf0f5;
}
.preview-zone {
  text-align: center;
}
.preview-zone .box {
  box-shadow: none;
  border-radius: 0;
  margin-bottom: 0;
}
</style>
    <!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="header-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h5 class="h-boldw">TIKET ELEKTRONIK</h5>
              </div>
              <p class="text-left wow bounceIn" data-wow-delay="0.4s">
                <a href="#" class="director btn-skin btn-lg">Tiket Elektronik <i class="fa fa-angle-right"><i class="text-success"> Status Pemesanan</i></i></a>
              </p>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="#" class="home-section paddingtop-20">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="koleksi bg-gray">
              <div class="row">
                <div class="col-md-1">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                      <span style="font-size: 40px;">
                        <i class="circled fas fa-atlas btn-skin"></i>
                      </span>
                  </div>
                </div>
                <div class="col-md-11 paddingtop-20">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <h3 class="h-bold">Status Pemesanan</h3>
                  </div>
                </div>
                
                  <div class="col-8">
                    {{-- @include('components.component') --}}
                    
                  </div>
                @if(!empty($data))
                <div class="row">
                  <div class="col-md-7">
                    <div class="row" style="padding-left: 18px; padding-top: 20px">
                      <div class="col-md-6 col-xs-6">
                        <h6 class="h-bold">Status</h6>
                      </div>
                      <div class="col-md-6 col-xs-6">
                        <h6>: {{$data->status_transaksi}}</h6>
                      </div>
                      <div class="col-md-6 col-xs-6">
                        <h6 class="h-bold">Kode Pemesanan</h6>
                      </div>
                      <div class="col-md-6 col-xs-6">
                        <h6>: {{$data->barcode}}</h6>
                      </div><div class="col-md-6 col-xs-6">
                        <h6 class="h-bold">Nama Ketua</h6>
                      </div>
                      <div class="col-md-6 col-xs-6">
                      <h6>: {{$data->name_wisatawan}}</h6>
                      </div><div class="col-md-6 col-xs-6">
                        <h6 class="h-bold">Jumlah Bayar</h6>
                      </div>
                      <div class="col-md-6 col-xs-6">
                        <h6>: Rp.{{$jumlah[0]->total}},-</h6>
                      </div><div class="col-md-6 col-xs-6">
                        <h6 class="h-bold">Maksimal Pembayaran</h6>
                      </div>
                      <div class="col-md-6 col-xs-6">
                        <h6>: {{date("d M Y",strtotime("+1 days",strtotime($data->tanggal_transaksi)))}}</h6>
                      </div>
                    </div>
                  </div>
                  @if($data->image=='')
                  <div class="col-md-5 card">
                  <form action="{{route('buktiup',$data->barcode)}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                  <input type="hidden" name="id" value="{{$data->id}}">
                  <input type="hidden" name="barcode" value="{{$data->barcode}}">
                          <div class="form-group">
                           <label class="control-label">Upload Bukti Pembayaran</label>
                           @if ($message = Session::get('success'))
                          <div class="alert alert-success alert-block">
                              <button type="button" class="close" data-dismiss="alert">×</button>
                                  <strong>{{ $message }}</strong>
                          </div>
                          <img src="images/{{ Session::get('image') }}">
                          @endif
                    
                          @if (count($errors) > 0)
                              <div class="alert alert-danger">
                                  <strong>Whoops!</strong> There were some problems with your input.
                                  <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @endif
                           <div class="preview-zone hidden">
                            <div class="box box-solid">
                             <div class="box-header with-border">
                              <div><b>Preview</b></div>
                              <div class="box-tools pull-right">
                                <i class="fa fa-times btn btn-danger remove-preview"></i> 
                              </div>
                             </div>
                             <div class="box-body"></div>
                            </div>
                           </div>
                           <div class="dropzone-wrapper">
                            <div class="dropzone-desc">
                             <i class="glyphicon glyphicon-download-alt"></i>
                             <p>Pilih file atau lepaskan file disini</p>
                            </div>
                            <input type="file" name="image" class="dropzone">
                           </div>
                          </div>
                          <button type="submit" class="btn btn-primary pull-right">Upload</button>
                      </form> 
                  </div>
                  @else
                  <div class="col-md-5 card">
                    <form action="{{route('buktiup',$data->barcode)}}" method="POST" enctype="multipart/form-data" >
                      @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <input type="hidden" name="barcode" value="{{$data->barcode}}">
                            <div class="form-group">
                             <label class="control-label">Upload Bukti Pembayaran</label>
                             @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                            {{-- <img src="images/{{ Session::get('image') }}"> --}}
                            @endif
                             <div class="preview-zone">
                              <div class="box box-solid">
                               <div class="box-header with-border">
                                <div><b>Bukti Yang telah diunggah</b></div>
                                <div class="box-tools pull-right">
                                  {{-- <i class="fa fa-times btn btn-danger remove-preview"></i>  --}}
                                </div>
                               </div>
                               <div class="box-body">
                              <img src="{{asset('/bukti/'.$data->image)}}" alt="" class="img-fluid img-thumbnail">
                               </div>
                              </div>
                             </div>
                             {{-- <div class="dropzone-wrapper">
                              <div class="dropzone-desc">
                               <i class="glyphicon glyphicon-download-alt"></i>
                               <p>Pilih file atau lepaskan file disini</p>
                              </div>
                              <input type="file" name="image" class="dropzone">
                             </div> --}}
                            </div>
                            {{-- <button type="submit" class="btn btn-primary pull-right">Upload</button> --}}
                        </form> 
                    </div>
                  @endif
                </div>
                @else
                  <h1>Mohon Maaf data tidak ditemukan, silahkan ketik ulang :(</h1>
                @endif
                
              </div>
              </div>

            </div>
          </div>
        </div>
       </div>
    </section>

    <script type="text/javascript">
      function readFile(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
        var htmlPreview = 
        '<img width="200" src="' + e.target.result + '" />'+
        '<p>' + input.files[0].name + '</p>';
        var wrapperZone = $(input).parent();
        var previewZone = $(input).parent().parent().find('.preview-zone');
        var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');
        
        wrapperZone.removeClass('dragover');
        previewZone.removeClass('hidden');
        boxZone.empty();
        boxZone.append(htmlPreview);
        };
        
        reader.readAsDataURL(input.files[0]);
        }
       }
       function reset(e) {
        e.wrap('<form>').closest('form').get(0).reset();
        e.unwrap();
       }
       $(".dropzone").change(function(){
        readFile(this);
       });
       $('.dropzone-wrapper').on('dragover', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass('dragover');
       });
       $('.dropzone-wrapper').on('dragleave', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('dragover');
       });
       $('.remove-preview').on('click', function() {
        var boxZone = $(this).parents('.preview-zone').find('.box-body');
        var previewZone = $(this).parents('.preview-zone');
        var dropzone = $(this).parents('.form-group').find('.dropzone');
        boxZone.empty();
        previewZone.addClass('hidden');
        reset(dropzone);
       });
    </script>
@endsection
