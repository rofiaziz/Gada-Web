@extends('/Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Kehadiran Satpam</title>
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
            <b>Kehadiran Satpam</b></h3>
        </h3>
        
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
               
                <thead>
                    <tr>
                        
                        <th>Nama Satpam</th>
                        <th>Kantor</th>
                        <th>Tanggal</th>
                        <th>Bulan</th>
                        <th>Shift</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($satpam as $s)
                    <tr class="tr-shadow">
                        
                        <td style="color: black"> {{$s ->profils['Name']}}</td>
                        <td style="color: black">
                            <span >{{ $s -> client->name }}</span>
                        </td>
                        <td style="color: black"> 
                            @foreach ($s ->attendance as $absen)
                            {{$absen->Date}}
                            
                            @endforeach
                        </td>
                        <td style="color: black"> @foreach ($s ->attendance as $absen)
                            {{$absen->Check_in}}
                            
                            @endforeach</td>
                        <td style="color: black"> @foreach ($s ->attendance as $absen)
                            {{$absen->Check_out}}
                            
                            @endforeach</td>
                        {{-- <td><span class="role cabang" style="text-align:center; line-height:1.5;">Master</span></td> --}}
                        <td class="desc">@foreach ($s ->attendance as $absen)
                            {{$absen->CoordLat}}
                            
                            @endforeach</td>
                        <td>
                            <span class="status--active">@foreach ($s ->attendance as $absen)
                                {{$absen->CoordLang}}
                                
                                @endforeach</span>
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