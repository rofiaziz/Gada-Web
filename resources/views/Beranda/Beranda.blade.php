@extends('/Layouts/MasterLayouts')
@section('Title')
    <title>
        GadaMaxima - Beranda
    </title>
@endsection 

{{-- Halaman Isi --}}
@section('layout')

{{-- <div class="row m-t-25">
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
</div> --}}
{{-- Bagian Selamat Datang --}}

<div class="overview-item overview-item--c6" style="height: 600px; background-color:white;background-image: url('/images/icon/logo-mini.png'); background-position:center;background-repeat:no-repeat; background-size:20%; opacity:0.8">
    <div class="overview__inner">
        <div style="display: flex; align-items: center; justify-content: center">
            {{-- <div class="container-fluid" style="height: 400px; background-color:black; display:inline-block"></div> --}}
            <div class="text" style=" text-align: center; position: relative; margin:120px;" >                        
            <h1>Selamat Datang {{explode(' ',trim(Auth::user()->name))[0]}}, di Halaman Admin</h1>
            @if(auth()->user()->state==NULL)
            <h1>Akun Anda Belum Aktif, Silakan Menghubungi GM untuk Aktivasi</h1>
            @endif
            <br>
            <h3>Akun Yang Anda Gunakan adalah Akun <span style="background-color: green;color:white;border-radius:20px;padding-left:5px;padding-right:5px"> {{auth()->user()->role}} </span>, anda dapat mengelola satpam, mengelola laporan, serta mengelola klien anda.</h3>
            <br>
            <h3>Selamat Bekerja {{explode(' ',trim(Auth::user()->name))[0]}}</h3>
            </div>                        
        </div>
    </div>
</div>


{{-- End Bagian Selamat Datang --}}
@endsection
{{-- End Halaman Isi --}}