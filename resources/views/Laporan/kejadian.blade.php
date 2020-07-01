@extends('/Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Laporan Kejadian</title>
@endsection

@section('ExtraFont')
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">  
@endsection
@section('layout')
<div class="row">
    <div class="col-md-12" style="background-color:#CCD4D4; padding-top:5px; padding-bottom:10px; border-radius:30px">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35" style=" font-size:45px;margin-left:12px; margin-top:12px">
            <i class="zmdi zmdi-account-calendar" ></i>
            <b>Laporan Kejadian</b></h3>
        </h3>
        
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
               
                <thead>
                    <tr>
                        
                        <th>Nama Satpam</th>
                        <th>Kantor</th>
                        <th>Insiden</th>
                        <th>Tindak Lanjut</th>
                        <th>File Gambar</th>
                        <th>Unduh</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accident as $s)
                    <tr class="tr-shadow">
                        
                        <td style="color: black"> {{$s ->satpam->profils['Name']}}</td>
                        <td style="color: black">
                            <span >{{ $s -> client->name }}</span>
                        </td>
                        <td style="color: black">
                            <span >{{ $s -> Incident }}</span>
                        </td>
                        <td style="color: black"> {{ $s -> Tindak_lanjut }}</td>
                        <td> <img src="file_attachment/fetch_image{{ $s -> id }}" width="75"></td>
                        <td > 
                            <div class="table-data-feature">
                                <a href="">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Unduh">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                </a>
                            </div>
                        </td>
                        
                        
                    </tr>
                    <tr class="spacer"></tr>
                  @endforeach                   
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE -->
</div>
</div>
@endsection