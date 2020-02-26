@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Daftar Pelanggan</title>
@endsection
@section('ExtraFont')
<link href="<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet"> " rel="stylesheet"> 
@endsection
@section('layout')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6"><h3 class="m-b-35" style="font-family: 'Abril Fatface'; font-size:35px;">Akun Pelanggan</h3>
            </div>
            <div class="col-md-6">
                <form class="form-header" action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Perusahaan" aria-label="Cari-Perusahaan" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
            </form>
        </div>
        </div>
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>Nama Perusahaan</th>
                        <th>Jumlah Akun</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Provinsi</th>
                        <th>Masa Berlangganan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2018-09-29 05:57</td>
                        <td>Mobile</td>
                        <td>iPhone X 64Gb Grey</td>
                        <td class="process">Processed</td>
                        <td>$999.00</td>
                    </tr>
                    <tr>
                        <td>2018-09-28 01:22</td>
                        <td>Mobile</td>
                        <td>Samsung S8 Black</td>
                        <td class="process">Processed</td>
                        <td>$756.00</td>
                    </tr>
                    <tr>
                        <td>2018-09-27 02:12</td>
                        <td>Game</td>
                        <td>Game Console Controller</td>
                        <td class="denied">Denied</td>
                        <td>$22.00</td>
                    </tr>
                    <tr>
                        <td>2018-09-26 23:06</td>
                        <td>Mobile</td>
                        <td>iPhone X 256Gb Black</td>
                        <td class="denied">Denied</td>
                        <td>$1199.00</td>
                    </tr>
                    <tr>
                        <td>2018-09-25 19:03</td>
                        <td>Accessories</td>
                        <td>USB 3.0 Cable</td>
                        <td class="process">Processed</td>
                        <td>$10.00</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>    
@endsection