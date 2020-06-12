@extends('/Layouts/MasterLayouts')
@section('Title')
    <title>
        GadaMaxima - Permintaan Konfirmasi Satpam
    </title>
@endsection 

@section('layout')
<div class="user-data m-b-30">
        <h3 class="title-3 m-b-30" style="font-size:45px; color: black">
            <i class="zmdi zmdi-account-calendar"></i><b style="color: black">Daftar Permintaan Akun Satpam</b></h3>
        
        <div class="table-responsive table-data">
            <table class="table">
                <thead>
                    <tr>
                        
                        <td><b style="font-size:20px; color: black">Nama</td>
                        <td><b style="font-size:20px; color: black">Strata</td>
                        <td><b style="font-size:20px; color: black">Alamat</td>
                        <td><b style="font-size:20px; color: black">Status</td>
                        <td><b style="font-size:20px; color: black">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    {{-- LOOP START --}}
                    @foreach ($satpam as $row)
                    
                    <tr>
                        
                        <td>
                            <div class="table-data__info">
                                <p style="color: black">{{ $row -> name }}</p>
                                <span>
                                    <a href="#">{{ $row -> email }}</a>
                                </span>
                            </div>
                        </td>
                        <td>
                            <p style="color: black"> Master
                        </td>
                        <td>
                            <p style="color: black"> {{ $row -> acc_state }}
                        </td>
                        <td>
                            <span class="role admin">Belum Aktif</h5></span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Terima">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                                
                            </div>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="user-data__footer">
            <button class="au-btn au-btn-load">lihat Lebih</button>
        </div>
    </div>
@endsection