@extends('layouts.front')
@section('frontcontent')
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
                <a href="#" class="director btn-skin btn-lg">Tiket Elektronik <i class="fa fa-angle-right"><i class="text-success">PERATURAN</i></i></a>
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
            <div class="container-fluid paddingtop-20">
              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <div class="wow fadeInDown" data-wow-delay="0.1s">
                    <div class="section-heading text-center">
                      {{-- <h4 class="h-bold">Selamat Datang</h4> --}}
                      <p>Pemesanan Tiket Elektronik Taman Nasional Baluran, Sebelum melakukan pembelian individu/kelompok yang akan melakukan wisata di Taman Nasional Baluran, dipersilahkan untuk mencermati tata cara pembelian dengan seksama. Peraturan dan Larangan merupakan hal yang harus ditaati oleh calon pengunjung.</p>
                    </div>
                  </div>
                  <div class="divider-short"></div>
                </div>
              </div>
            </div>
      <div class="container paddingtop-10">
        <div class="row">
          <div class="col-md-12">
            <div class="koleksi bg-gray">
              <div class="row paddingtop-20">
                <div class="col-md-1">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                      <span style="font-size: 40px;">
                        <i class="fas fa-atlas circled btn-skin"></i>
                      </span>
                  </div>
                </div>
                <div class="col-md-4 paddingtop-20">
                    <h5 class="h-bold">PERATURAN</h5>
                </div>
                <div class="col-md-12" id="peraturan">
                    <div class="well well-trans">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-success"></span> 
                                <span style="margin-left: 10px">Pembayaran hanya bisa dilakukan dengan <strong>Transfer</strong></span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-success"></span> 
                                <span style="margin-left: 10px">Nominal pembayaran harus sesuai dengan tarif nominal pada pada pembelian tiket online</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-success"></span> 
                                <span style="margin-left: 10px">Batas waktu Pembayaran anda <strong>1x24</strong> jam setelah pendaftaran booking online</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-success"></span> 
                                <span style="margin-left: 10px">Untuk mengantisipasi kesalahan/error pada pembayaran, maka tidak disarankan melakukan transaksi pada 23.00 WIB - 01.00 WIB</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-success"></span> 
                                <span style="margin-left: 10px">Pembayaran bisa dilakukan melalui teller bank.</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-success"></span> 
                                <span style="margin-left: 10px">Tidak ada pengembalian pembayaran dana yang telah ditransfer karena adanya pembatalan wisata / refund.</span></li>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                      <span style="font-size: 40px;">
                        <i class="fas fa-atlas circled btn-skin"></i>
                      </span>
                  </div>
                </div>
                <div class="col-md-4 paddingtop-20">
                    <h5 class="h-bold">LARANGAN</h5>
                </div>
                <div class="col-md-12" id="larangan">
                    <div class="well well-trans">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                          <div>Setiap pengunjung yang memasuki kawasan TNBLN dilarang :</div>
                          <br>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Mengambil memetik memotong tumbuhan dan atau bagian-bagiannya serta benda-benda lainnya</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Menangkap melukai dan atau membunuh satwa yang ada dalam kawasan</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Membawa binatang ke dalam maupun keluar kawasan</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Membawa minuman keras atau beralkohol</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Membawa obat-obatan terlarang seperti ganja dan sejenisnya.</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Membawa alat musik dan alat bunyi-bunyian lainnya.</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Membawa alat elektronik seperti radio komunikasi (Handy Talky) radio tape dll, kecuali jam tangan.</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Membawa senjata api senapan angin bahan peledak dan senjata tajam lainnnya.</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Membawa alat-alat yang lazim digunakan untuk berburu seperti senjata api senapan, panah dll.</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Membawa bahan detergen dan bahan pencemaran lainnya yang membahayakan bagi lingkungan.</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Membawa berbagai jenis cat termasuk cat semprot dan jenis pewarna lainnya.</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Melakukan perusakan fasilitas wisata dan tempel menempel pada kawasan.</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Membuang sampah dalam kawasan.</span></li>
                            </div>
                            <div style="margin-left: 8px">
                                <span class="fa fa-check fa icon-danger"></span> 
                                <span style="margin-left: 10px">Melakukan perbuatan asusila.</span></li>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                      <span style="font-size: 40px;">
                        <i class="fas fa-atlas circled btn-skin"></i>
                      </span>
                  </div>
                </div>
                <div class="col-md-9 paddingtop-20">
                    <h5 class="h-bold">ISI CHECKLIST PERSYARATAN KUNJUNGAN BROMO DIBAWAH INI</h5>
                </div>
                <div class="col-md-12" id="checklist">
                    <div class="well well-trans">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div>
                                <!-- Material unchecked -->
                                <div class="form-check">
                                    <input type="checkbox" id="checkme" class="form-check-input" id="materialUnchecked">
                                    <label class="form-check-label" for="materialUnchecked">Menunjukan Bukti Transfer Pemesanan Tiket Elektronik Wisata Taman Nasional Baluran *</label>
                                </div>
                            </div>
                            <div>
                                <div class="form-check">
                                    <input type="checkbox" id="checkme1" class="form-check-input" id="materialUnchecked">
                                    <label class="form-check-label" for="materialUnchecked">Membawa kartu tanda pengenal (ktp/ktm), dan Paspor yang masih berlaku (Khusus Wisata Mancanegara/Wisman).</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                      <span style="font-size: 40px;">
                        <i class="fas fa-atlas circled btn-skin"></i>
                      </span>
                  </div>
                </div>
                <div class="col-md-4 paddingtop-20">
                    <h3 class="h-bold">PERSETUJUAN</h3>
                </div>
                <div class="col-md-12">
                    <div class="well well-trans">
                        <div class="wow fadeInRight" data-wow-delay="0.1s">
                            <div>
                              <div class="text-danger">
                                Segala persyaratan yang diisi wajib dipertanggungjawabkan, jika tidak sesuai/tidak lengkap tidak diberikan ijin melakukan wisata Taman Nasional Baluran, dan uang yang sudah ditransfer tidak dapat diambil kembali.
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
              <i>Anda memahami, menyetujui, syarat dan ketentuan-ketentuan di atas, silakan isi checklist persyaratan diatas dan klik menu daftar</i>
              <div class="paddingtop-20">
              <a href="tanggal">
                <button type="button" id="buttonenable" class="btn btn-primary" disabled="disabled">Pesan Tiket</button>
              </a>
              </div>
            </div>
            </div>
          </div>
        </div>
       </div>
    </section>
    <script>
    var checker = document.getElementById('checkme');
    var checker = document.getElementById('checkme1');
    var sendbtn = document.getElementById('buttonenable');
    // when unchecked or checked, run the function
    checker.onchange = function(){
    if(this.checked){
        sendbtn.disabled = false;
    } else {
        sendbtn.disabled = true;
    }

    }
    </script>
    <!-- /Section: boxes -->
@endsection