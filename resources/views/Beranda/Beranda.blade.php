@extends('/Layouts/MasterLayouts')
@section('Title')
    <title>
        GadaMaxima - Beranda
    </title>
@endsection 

{{-- Halaman Isi --}}
@section('layout')

<div class="row m-t-25">
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-account-o"></i>
                    </div>
                    <div class="text">
                        <h2>10,368</h2>
                        <span>Jumlah Satpam</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </div>
                    <div class="text">
                        <h2>388,688</h2>
                        <span>Perusahaan OS</span>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-calendar-note"></i>
                    </div>
                    <div class="text">
                        <h2>899,086</h2>
                        <span>Jumlah Client</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="zmdi zmdi-money"></i>
                    </div>
                    <div class="text">
                        <h2>$1,060,386</h2>
                        <span>total earnings</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Bagian Selamat Datang --}}

        <div class="overview-item overview-item--c6" style="background-color:white">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="text" style="height: 300px; " >
                    <h1 >Selamat Datang di Halaman Admin</h1>
                    </div>                        
                </div>
            </div>
        </div>


  {{-- End Bagian Selamat Datang --}}
@endsection
{{-- End Halaman Isi --}}