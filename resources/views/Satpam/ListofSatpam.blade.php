@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Daftar Satpam</title>
@endsection
@section('ExtraFont')
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">  
@endsection
@section('layout')
                       
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <h3 class="title-3 m-b-30" style="font-size:45px;" >
                    <i class="zmdi zmdi-account-calendar" ></i>
                    <b>Daftar Satpam</b></h3>
            </div>
            {{-- <div class="col-md-6">
                <form class="form-header" action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Perusahaan" aria-label="Cari-Perusahaan" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
                </form>
            </div> --}}
        </div>
        <!-- DATA TABLE-->
        
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr >
                        <th><b style="color: whitesmoke">Nama Satpam</b></th>
                        <th><b style="color: whitesmoke">Email</b></th>
                        <th><b style="color: whitesmoke">Alamat</b></th>
                        {{-- <th><b style="color: whitesmoke">Strata</b></th> --}}
                        <th><b style="color: whitesmoke">Jenis Kelamin</b></th>
                        
                    </tr>
                </thead>
                <tbody>

                    @foreach ($satpam as $p)

                    <tr>
                        <td><p style="color: black">{{ $p->profils->Name }} </p></td>
                        <td><p style="color: black">{{ $p-> email }}</td>
                        <td><p style="color: black">{{ $p-> profils->Address}}</td>
                        {{-- <td><p style="color: black">Master</span></td> --}}
                        <td>
                            <p style="color: black"><?php
                                if ( $p->profils->Gender ==1){
                                    echo "Pria";
                                }
                                elseif( $p->profils->Gender ==2) {
                                    echo "Wanita";
                                }
                                else{
                                    echo "Yang Lain";
                                }
                                
                                ?></p>
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