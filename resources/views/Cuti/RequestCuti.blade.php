@extends('/Layouts/MasterLayouts')
@section('Title')
    <title>
        GadaMaxima - Cuti Satpam
    </title>
@endsection 

@section('layout')
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-3 m-b-30" style="font-size:45px;" >
                    <i class="zmdi zmdi-account-calendar" ></i>
                    <b>Daftar Cuti</b></h3>
            </div>
        </div>


        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3" id="dataTable">
                <thead>
                    <tr>
                        
                        <th><b style="color: whitesmoke">Nama</b></th>
                        {{-- <td><b style="font-size:20px; color: black">Strata</td> --}}
                        <th><b style="color: whitesmoke">Outsourcing</b></th>
                        <th><b style="color: whitesmoke">Kantor</b></th>
                        <th><b style="color: whitesmoke">Keterangan</b></th>
                        <th><b style="color: whitesmoke">Status</b></th>
                        <th><b style="color: whitesmoke">Aksi</b></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- LOOP START --}}
                    @foreach ($cuti as $row)
                    
                    <tr>
                        
                        <td>
                            <div class="table-data__info">
                                <p style="color: black">{{ $row->satpam->profils['Name'] }}</p>
                                <span>
                                    <a href="#">{{ $row ->satpam-> email }}</a>
                                </span>
                            </div>
                        </td>
                        {{-- <td>
                            <p style="color: black"> Master
                        </td> --}}
                        <td>
                            <p style="color: black"> {{ $row ->company->Name }}
                        </td>
                        <td>
                            <p style="color: black"> {{ $row ->client->name }}
                        </td>
                        <td>
                            <p style="color: black"> {{ $row ->keterangan }}
                        </td>
                        <td>
                            @if ($row->state=='0')
                                <span class="role user">Menunggu</h5></span>
                            @elseif($row->state=='1')
                            <span class="role member">Disetujui</h5></span>
                            @elseif($row->state=='2')
                            <span class="role admin">Ditolak</h5></span>                              
                            @endif
                            
                        </td>
                        <td>
                            <div class="table-data-feature">
                                
                                <a href="/Cuti/Acc/{{ $row->id }}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Terima">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                </a>
                                <a href="/Cuti/Dec/{{ $row->id }}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Tolak">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </a>
                                <a href="/Cuti/lebih/{{ $row->id }}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Detail">
                                        <i class="zmdi zmdi-more"></i>
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