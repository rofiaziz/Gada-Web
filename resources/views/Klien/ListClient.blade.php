@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Daftar Klien</title>
@endsection
@section('ExtraFont')
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
@endsection
@section('layout')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6"><h3 class="m-b-35" style="font-family: 'Abril Fatface'; font-size:35px;">Daftar Klien</h3>
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
                        <th>Nama Klien</th>
                        <th>Lokasi</th>
                        <th>Berlangganan sampai</th>
                        {{-- <th>Jumlah Client</th> --}}
                        <th>Satpam Aktif</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($List as $p)

                    <tr>
                        <td>{{ $p-> name }}</td>
                        <td>{{ $p->Client->location }}</td>
                        <td>{{ $p->Client->valid_since}}</td>
                        {{-- <td><span class="role cabang" style="text-align:center; line-height:1.5;">p-> jumlah_client }}</span></td> --}}
                        <td>{{ $p->Client->security_active }}</td>
                    </tr>
                   
                    @endforeach                   
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>  
@endsection