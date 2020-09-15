<h3>Halo, {{ $nama }} Pembayan Berhasil !</h3>
<hr>
<p>Nama Pemesan : {{ $nama }}</p>
<p>Negara : {{ $negara }}</p>
<p>Total Pembayaran : {{ $bayar }}</p>
<p>Tanggal transaksi : {{ $tanggal_transaksi }}</p>
<p>Tanggal Berkunjung : {{$tanggal_berkunjung}}
<hr>
QRCode Tiket :
<img src="{!!$message->embedData(QrCode::format('png')->size(512)->margin(2)->generate($barcode) ,'QRcode.png','image/png')!!}">
<br>
<p> <a href="osingtech.net">OsingTech.net</a>@2020</p>