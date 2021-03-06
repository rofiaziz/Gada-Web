@extends('/Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Laporan </title>
@endsection

@section('ExtraFont')
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">  
@endsection
@section('layout')
<div class="row">
    <div class="col-md-12" style="background-color:#f8f9fa; padding-top:5px; padding-bottom:10px; border-radius:30px">
        <!-- DATA TABLE -->
        <h3 class="title-5 m-b-35" style=" font-size:45px;margin-left:12px; margin-top:12px">
            <i class="zmdi zmdi-account-calendar" ></i>
            <b>Laporan Kendaraan </b></h3>
        </h3>
             <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2" id="dataTable">
                           
                            <thead>
                                <tr>
                                    
                                    <th>Nama Satpam</th>
                                    <th>Kantor</th>
                                    <th>Tanggal</th>
                                    <th>Jam Masuk</th>
                                    <th>Jam Keluar</th>
                                    <th>Pengemudi</th>
                                    <th>Nomor Kendaraan</th>
                                    <th>Catatan</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicle as $s)
                                <tr class="tr-shadow">
                                    
                                    <td style="color: black"> {{$s ->satpam->profils['Name']}}</td>
                                    <td style="color: black">
                                        <span >{{ $s -> client->name }}</span>
                                    </td>
                                   
                                    <td style="color: black">
                                        {{ $s['Date'] }}
                                    </td>
                                    <td style="color: black"> {{ $s['Time_in'] }} </td>
                                    <td style="color: black"> {{ $s['Time_out'] }}</td>
                                    <td style="color: black"> {{ $s['Driver_name']}}</td>
                                    <td style="color: black"> {{ $s['vehicle_num']}}</td>
                                    <td style="color: black"> <textarea name="catatan" id="" >{{ $s['note']}}</textarea> </td>
                                   
                                </tr>
                              @endforeach             
                            </tbody>
                        </table>
                    </div>
            
        
</div>
</div>


@endsection
@section('footer')

    
@endsection
