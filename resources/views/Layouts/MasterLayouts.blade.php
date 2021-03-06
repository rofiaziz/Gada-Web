<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">>

<head>

    
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{URL::asset('images/icon/logo-mini.png')}}">
    
    <!-- Fontfaces CSS-->
    <link href="{{URL::asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{URL::asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{URL::asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{URL::asset('css/theme.css')}}" rel="stylesheet" media="all">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Datatable -->
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css"> --}}
    
    <link href="{{URL::asset('css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" media="all">
    
    
    
    
   
  <!-- Title Page-->
  @yield('Title')

    {{-- Extra Font --}}
    @yield('ExtraFont')
   {{-- Extra Font --}}

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{URL::asset('images/icon/logo-mobile.png')}}" alt="CoolAdmin" style="max-width:150px" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                            <li>
                                <a href="chart.html">
                                    <i class="fas fa-tachometer-alt"></i>Beranda</a>
                            </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-chart-bar"></i>Outsourching</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="/Outsourcing/Request">Permintaan</a>
                                    </li>
                                    <li>
                                        <a href="/Outsourcing/Add">Tambah Outsourcing</a>
                                    </li>
                                    <li>
                                        <a href="/Outsourcing/Account">Akun</a>
                                    </li>
                                    <li>
                                        <a href="/Outsourcing/ListofCustomer">Daftar Outsourcing</a>
                                    </li>
                                    <li>
                                        <a href="/Outsourcing/Bills">Tagihan</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Satpam</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="/Satpam/RequestSatpam">Permintaan</a>
                                    </li>
                                   
                                </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Pesan</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="/Message/Write">Tulis Pesan</a>
                                    </li>
                                    <li>
                                        <a href="/Message/Inbox">Pesan Masuk</a>
                                    </li>
                                    <li>
                                        <a href="/Message/Outbox">Pesan Keluar</a>
                                    </li>
                                </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Klien</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="/Message/Write">Daftar Klien</a>
                                    </li>
                                    <li>
                                        <a href="/Message/Inbox">Tambah Klien</a>
                                    </li>
                                    <li>
                                        <a href="/Message/Outbox">Request Deploy Satpam</a>
                                    </li>
                                </ul>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Other</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login.html">Paket</a>
                                </li>
                                <li>
                                    <a href="register.html">Lokasi</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{URL::asset('images/icon/logo.png')}}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list" >
                            <li>
                                <a href="{{url('/')}}">
                                    <i class="fas fa-television"></i>Beranda</a>
                            </li>

                            @if (auth()->user()->role == 'admin')
                            <li class="has-sub">
                                <a class="js-arrow" href="#" disabled>
                                    <i class="fas fa-chart-bar"></i>Outsourching</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="{{ url('/Outsourcing/Request')}}">Permintaan</a>
                                    </li>
                                    <li>
                                        <a href="/Outsourcing/Add">Tambah Outsourching</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/Outsourcing/Account')}}">Akun</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/Outsourcing/ListofCustomer')}}">Daftar Outsourcing</a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{ url('/Outsourcing/Bills')}}">Tagihan</a>
                                    </li> --}}
                                </ul>
                            </li>
                            @endif
                       
                            @if (auth()->user()->role != '') 
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-table"></i>Satpam</a>
                                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                        
                                        @if ((auth()->user()->role == 'admin') || (auth()->user()->role == 'outsourcing'))
                                        
                                            <li><?php
                                                $parameter= Crypt::encrypt(Auth::user()->id);
                                            ?>
                                                <a href="{{ route('request',$parameter)}}">Permintaan Aktivasi</a>
                                            </li>
                                            <li><?php
                                                $parameter= Crypt::encrypt(Auth::user()->id);
                                            ?>
                                                <a href="{{ route('deploy',$parameter)}}">Deployment</a>
                                            </li>
                                            <li><?php
                                                $parameter= Crypt::encrypt(Auth::user()->id);
                                            ?>
                                                <a href="{{ route('daftarcuti',$parameter)}}">Permintaan Cuti</a>
                                            </li>
                                        @endif

                                        <li><?php
                                            $parameter= Crypt::encrypt(Auth::user()->id);
                                        ?>
                                            <a href="{{ route('listsatpam',$parameter)}}">Daftar Satpam</a>
                                        </li>
                                        <li><?php
                                            $parameter= Crypt::encrypt(Auth::user()->id);
                                        ?>
                                            <a href="{{ route('attendance',$parameter)}}">Kehadiran</a>
                                        </li>
                                        <li><?php
                                            $parameter= Crypt::encrypt(Auth::user()->id);
                                        ?>
                                            <a href="{{ route('schedule',$parameter)}}">Jadwal Kehadiran</a>
                                        </li>
                                        
                                    </ul>
                            </li>
                            @endif
                        @if ((auth()->user()->role == 'admin') || (auth()->user()->role == 'outsourcing'))
                               
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-table"></i>Klien</a>
                                    <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                        <li><?php
                                            $parameter= Crypt::encrypt(Auth::user()->id);
                                        ?>
                                            <a href="{{ route('listclient',$parameter)}}">Daftar Klien</a>
                                        </li>

                                        @if ((auth()->user()->role == 'outsourcing'))
                                            
                                        
                                        <li>
                                            <a href="{{ route('addclient')}}">Tambah Klien</a>
                                        </li>
                                        @endif
                                        {{-- <li>
                                            <a href="{{ url('/RequestfromClient')}}">Request Deploy Satpam</a>
                                        </li> --}}
                                    </ul>
                            </li>
                        @endif
                        @if ((auth()->user()->role == 'admin') || (auth()->user()->role == 'client') || (auth()->user()->role == 'outsourcing'))
                               
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-table"></i>Laporan Satpam</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li><?php
                                        $parameter= Crypt::encrypt(Auth::user()->id);
                                    ?>
                                        <a href="{{ route('daftarkejadian',$parameter)}}">Laporan Kejadian</a>
                                    </li>
                                    <li><?php
                                        $parameter= Crypt::encrypt(Auth::user()->id);
                                    ?>
                                        <a href="{{ route('daftarkendaraan',$parameter)}}">Laporan Kendaraan</a>
                                    </li>
                                    <li><?php
                                        $parameter= Crypt::encrypt(Auth::user()->id);
                                    ?>
                                        <a href="{{ route('daftartamu',$parameter)}}">Laporan Tamu</a>
                                    </li>
                                </ul>
                        </li>
                    @endif
                    
                        <li class="has-sub">
                            <a class="js-arrow" href="{{ url('/Message/Inbox')}}">
                                <i class="fas fa-envelope"></i>Pesan</a>
                                
                        </li>
                     
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                {{-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> --}}
                            </form>
                            <div class="header-button">
                                {{-- <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{ url::ASSET('images/icon/avatar-06.jpg')}}" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new Beranda...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new Beranda...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="{{ url::ASSET('images/icon/avatar-04.jpg')}}" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new Beranda...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ Auth::user()->profile_image}}" alt="{{ Auth::user()->name }}" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ Auth::user()->profile_image}}" alt="{{ Auth::user()->name }}" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>Logout
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <!-- ISI CONTENT-->
                        @yield('layout')
                        <!-- END ISI CONTENT-->
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{URL::asset('vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{URL::asset('vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{URL::asset('vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{URL::asset('vendor/wow/wow.min.js')}}"></script>
    <script src="{{URL::asset('vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{URL::asset('vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{URL::asset('vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{URL::asset('vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{URL::asset('vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{URL::asset('vendor/select2/select2.min.js')}}"></script>

    <!-- Main JS-->
    <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{URL::asset('js/app.js')}}"></script>

    {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script> --}}
       <script src="{{URL::asset('js/jquery.dataTables.min.js')}}"></script>
       <script src="{{URL::asset('js/dataTables.bootstrap4.min.js')}}"></script>
       <script src="{{URL::asset('js/datatables-demo.js')}}"></script>

    <script type="text/javascript">
   $(document).ready(function () {
    $('a[href="' + this.location.pathname + '"]').parents().addClass('active');
    });
    </script>
@yield('footer')
</body>

</html>
<!-- end document-->
