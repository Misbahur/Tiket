<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome Tiket Elektronik Taman Nasional Baluran</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{ asset('plugins/morrisjs/morris.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/themes/all-themes.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="https://kit.fontawesome.com/ed817095f7.js" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Sistem Tiket Elektronik Taman Nasional Baluran</a>
            </div>
            <!-- <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div> -->
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ asset ('images/user.png') }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->fullname }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <!-- #User Info -->
            @if (Auth::user()->level_user=='it')
                <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="activ">
                    <a href="{{url('/dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/datatiket')}}">
                            <i class="material-icons">menu</i>
                            <span>Data Tiket</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/users')}}">
                            <i class="material-icons">accessibility</i>
                            <span>Users</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            @endif
            @if (Auth::user()->level_user=='kepala')
                <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="activ">
                    <a href="{{url('/dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/laporan')}}">
                            <i class="material-icons">description</i>
                            <span>Laporan</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            @endif
            @if (Auth::user()->level_user=='koordinator')
              <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="activ">
                    <a href="{{url('/dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/laporan')}}">
                            <i class="material-icons">description</i>
                            <span>Laporan</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">store</i>
                            <span>Penjualan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{('/online')}}">
                                <i class="material-icons">credit_card</i>
                                    <span>Online</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/offline')}}">
                                <i class="material-icons">shopping_cart</i>
                                    <span>Offline</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->  
            @endif
            @if (Auth::user()->level_user=='petugas')
                <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="activ">
                    <a href="{{url('/dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/laporan')}}">
                            <i class="material-icons">description</i>
                            <span>Laporan</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">store</i>
                            <span>Penjualan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{('/online')}}">
                                <i class="material-icons">credit_card</i>
                                    <span>Online</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/offline')}}">
                                <i class="material-icons">shopping_cart</i>
                                    <span>Offline</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            @endif
            <!-- Menu -->
            {{-- <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="activ">
                    <a href="{{url('/dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/datatiket')}}">
                            <i class="material-icons">menu</i>
                            <span>Data Tiket</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/laporan')}}">
                            <i class="material-icons">description</i>
                            <span>Laporan</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">store</i>
                            <span>Penjualan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{('/online')}}">
                                <i class="material-icons">credit_card</i>
                                    <span>Online</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/offline')}}">
                                <i class="material-icons">shopping_cart</i>
                                    <span>Offline</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/users')}}">
                            <i class="material-icons">accessibility</i>
                            <span>Users</span>
                        </a>
                    </li>
                </ul>
            </div> --}}
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 <a href="javascript:void(0);">Admin_Material Design - OsingTech</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
    @yield('content')
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js') }}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('plugins/node-waves/waves.js') }}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('plugins/jquery-countto/jquery.countTo.js') }}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('plugins/morrisjs/morris.js') }}"></script>

    <!-- Flot Charts Plugin Js -->
    {{-- <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.time.js') }}"></script> --}}

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('plugins/jquery-sparkline/jquery.sparkline.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/pages/index.js') }}"></script>

</body>

</html>
