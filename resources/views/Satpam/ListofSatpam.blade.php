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
            <div class="col-md-12">
                <h3 class="title-3 m-b-30" style="font-size:45px;" >
                    <i class="zmdi zmdi-account-calendar" ></i>
                    <b>Daftar Satpam</b></h3>
            </div>
            <div class="table-data__tool col-md-6">
                <div class="table-data__tool-right">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">

                        <i style="color: rgba(0, 0, 0, 0.719)"><b>Jumlah Satpam : {{$count}}</b></i>
                   
                </div>
            </div>
            <div class="table-data__tool col-md-6">
                <div class="table-data__tool-right">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        @foreach ($company as $item)
                            
                        
                        <i style="color: rgba(0, 0, 0, 0.719)"><b>Batas Maksimal Satpam : {{$item->package->Security_Count}}</b></i>
                        @endforeach
                </div>
            </div>
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
                        <th><b style="color: whitesmoke">Aksi</b></th>
                        
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
                        <td>
                            <div class="table-data-feature">
                                <a href="/Satpam/RequestSatpam/delete/{{ $p->id }}">
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