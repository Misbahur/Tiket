@extends('layouts.front')
@section('frontcontent')
<!-- Section: intro -->
    <section id="intro" class="intro">
      <div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
                <h2 class="h-ultra">Selamat Datang</h2>
              </div>
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
                <h4 class="h-light">Wisata Taman Nasional Baluran</h4>
              </div>
              <p class="text-left wow bounceIn" data-wow-delay="0.4s">
                <a href="#" class="btn btn-skin btn-lg">Learn more <i class="fa fa-angle-right"></i></a>
              </p>
            </div>
            <div class="col-lg-6">
              <div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <img src="front/img/dummy/img-1.png" class="img-responsive" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <section id="callaction" class="home-section paddingtop-20">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-9">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="cta-text">
                      <h3>Pemesanan Tiket Elektronik Wisata TN Baluran</h3>
                      <p>Pemesanan Tiket dapat dilakukan selama 24 jam, cermati tata cara dan aturan yang sudah ditetapkan, disarankan untuk pemesanan dan pembayaran dilakukan jauh hari sebelum tanggal berkunjung. </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="cta-btn">
                      <a href="peraturan" class="btn btn-skin btn-lg">Pesan Tiket</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
    </section>
<!-- /Section: boxes -->
@endsection