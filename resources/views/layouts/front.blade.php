<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon-->
  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
  
  <title>Tiket Elektronik Taman Nasional Baluran</title>

  <!-- css -->
  <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  {{-- <link href="{{ asset('front/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('front/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
  <link href="{{ asset('front/fontawesome/css/brands.css') }}" rel="stylesheet">
  <link href="{{ asset('front/fontawesome/css/solid.css') }}" rel="stylesheet"> --}}
  <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/cubeportfolio/css/cubeportfolio.min.css') }}">
  <link href="{{ asset('front/css/nivo-lightbox.css') }}" rel="stylesheet" />
  <link href="{{ asset('front/css/nivo-lightbox-theme/default/default.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('front/css/owl.carousel.css') }}" rel="stylesheet" media="screen" />
  <link href="{{ asset('front/css/owl.theme.css') }}" rel="stylesheet" media="screen" />
  <link href="{{ asset('front/css/animate.css') }}" rel="stylesheet" />
  <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
  <script src="{{ asset('front/js/jquery.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://kit.fontawesome.com/ed817095f7.js" crossorigin="anonymous"></script>

  <!-- boxed bg -->
  <link id="bodybg" href="{{ asset('front/bodybg/bg1.css') }}" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="{{ asset('front/color/default.css') }}" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left"></p>
            </div>
            <div class="col-sm-6 col-md-6">
              <p class="bold text-right"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand" href="#">
                    <img src="{{ asset('front/img/logo.png') }}" alt="" width="150" height="40" />
                </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="{{ Request::segment(1) === '/' ? 'active' : null }}"><a href="/">Home</a></li>
            <li class="{{ Request::segment(1) === 'pembayaran' ? 'active' : null }}"><a href="#">Pembayaran</a></li>
            <li class="{{ Request::segment(1) === 'panduan' ? 'active' : null }}"><a href="panduan">Panduan Pemesanan</a></li>
            {{-- <li class="{{ Request::segment(1) === 'login' ? 'active' : null }}"><a href="{{ route('login') }}">Admin</a></li> --}}
            <li style="padding-top: 8px">
            <form class="form-inline col-xs-12" action="{{route('status')}}" method="GET">
            <input class="form-control fa fa-pencil-square-o" type="search" placeholder="Masukan Kode Pemesanan" name="caritiket" value="{{old('caritiket')}}" required>
              <button class="btn btn-skin btn-md" type="submit" value="caritiket"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
          </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>

    <section class="frontcontent" >
      
        @yield('frontcontent')
      
    </section>

    <footer>
      <div class="sub-footer">
        <div class="container bg--dark">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInLeft" data-wow-delay="0.1s">
                <div class="text-left">
                  <a>&copy;Copyright - OsingTech. All rights reserved.</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <div class="wow fadeInRight" data-wow-delay="0.1s">
                <div class="text-right">
                  <div class="credits">
                    Designed by <a href="https://bootstrap.com/">Bootstrap</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

  <!-- Core JavaScript Files -->
  
  <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('front/js/wow.min.js') }}"></script>
  <script src="{{ asset('front/js/jquery.scrollTo.js') }}"></script>
  <script src="{{ asset('front/js/jquery.appear.js') }}"></script>
  <script src="{{ asset('front/js/stellar.js') }}"></script>
  <script src="{{ asset('front/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
  <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('front/js/nivo-lightbox.min.js') }}"></script>
  <script src="{{ asset('front/js/custom.js') }}"></script>
  {{-- <script defer src="{{ asset('front/fontawesome/js/brands.js') }}"></script>
  <script defer src="{{ asset('front/fontawesome/js/solid.js') }}"></script>
  <script defer src="{{ asset('front/fontawesome/js/fontawesome.js') }}"></script> --}}

</body>

</html>
