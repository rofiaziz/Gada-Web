@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Daftar Akun Satpam</title>
@endsection
@section('ExtraFont')
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">  
@endsection
@section('layout')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6"><h3 class="m-b-35" style="font-family: 'Abril Fatface'; font-size:35px;">Daftar Akun Satpam</h3>
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
                        <th>Nama Satpam</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Strata</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Siti</td>
                        <td>Siti@siti.com</td>
                        <td>Green Land</td>
                        <td><span class="role cabang" style="text-align:center; line-height:1.5;">Master</span></td>
                        <td>Other</td>
                    </tr>
                    <tr>
                        <td>Agus</td>
                        <td>Agus@email.com</td>
                        <td>Blue Land</td>
                        <td><span class="role admin">Newbie</span></td>
                        <td>Laki-Laki</td>
                    </tr>                    
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>    
@endsection