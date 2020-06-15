@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Daftar Pelanggan</title>
@endsection
@section('ExtraFont')
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
@endsection
@section('layout')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6"><h3 class="m-b-35" style="font-family: 'Abril Fatface'; font-size:35px;">Daftar Perusahaan</h3>
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
                        <th>Kota</th>
                        <th>Alamat</th>
                        <th>Jumlah Client</th>
                        <th>Jenis paket</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($List as $p)

                    <tr>
                        <td>{{ $p-> Name }}</td>
                        <td>{{ $p-> City }}</td>
                        <td>{{ $p-> Address}}</td>
                        <td><span class="role cabang" style="text-align:center; line-height:1.5;">{{ $p-> Client_count }}</span></td>
                        <td>{{ $p-> Satpam_count }}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="/Outsourcing/Edit/{{ $p->id }}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit" ></i> 
                                    </button>
                                </a>
                                <a href="/Outsourcing/Delete/{{ $p->id }}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                   
                    @endforeach                   
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>  
@endsection