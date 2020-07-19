@extends('/Layouts/MasterLayouts')
@section('Title')
    <title>
        GadaMaxima - Permintaan Konfirmasi Satpam
    </title>
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
        </div>


        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3" id="dataTable">
                <thead>
                    <tr>
                        
                        <th><b style="color: whitesmoke">Nama</b></th>
                        {{-- <td><b style="font-size:20px; color: black">Strata</td> --}}
                        <th><b style="color: whitesmoke">Alamat</b></th>
                        <th><b style="color: whitesmoke">Status</b></th>
                        <th><b style="color: whitesmoke">Aksi</b></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- LOOP START --}}
                    @foreach ($satpam as $row)
                    
                    <tr>
                        
                        <td>
                            <div class="table-data__info">
                                <p style="color: black">{{ $row->profils->Name }}</p>
                                <span>
                                    <a href="#">{{ $row -> email }}</a>
                                </span>
                            </div>
                        </td>
                        {{-- <td>
                            <p style="color: black"> Master
                        </td> --}}
                        <td>
                            <p style="color: black"> {{ $row -> profils->Address }}
                        </td>
                        <td>
                            <span class="role admin">Belum Aktif</h5></span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                
                                <a href="/Satpam/RequestSatpam/edit/{{ $row->id }}">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Terima">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                </a>
                                <a href="/Satpam/RequestSatpam/delete/{{ $row->id }}">
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
        
    </div>
</div>    
@endsection