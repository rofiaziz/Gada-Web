@extends('/Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Laporan </title>
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
            <b>Laporan Satpam</b></h3>
        </h3>
        <div id="navbar-example">
             <!-- Nav tabs -->
             <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" >
                    <a class="nav-link active" data-toggle="tab" href="#kejadian" role="tab">Laporan Kejadian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kendaraan" role="tab">Laporan Kendaraan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tamu" role="tab">Laporan tamu</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active show" id="kejadian" name="about" role="tabpanel">
                    
                    <div class="table-responsive table-responsive-data2" >
                        <table class="table table-data2">
                        
                            <thead>
                                <tr>
                                    
                                    <th>Nama Satpam</th>
                                    <th>Kantor</th>
                                    <th>Insiden</th>
                                    <th>Tindak Lanjut</th>
                                    <th>Catatan</th>
                                    <th>Unduh</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($satpam as $s)
                                <tr class="tr-shadow">
                                    
                                    <td style="color: black"> {{$s ->profils['Name']}}</td>
                                    <td style="color: black">
                                        <span >{{ $s -> client->name }}</span>
                                    </td>
                                    @foreach ($s ->accident as $item)
                                    <td style="color: black">
                                        {{ $item['Incident'] }}
                                    </td>
                                    <td style="color: black"> {{ $item['Tindak_lanjut'] }} </td>
                                    <td style="color: black"> <textarea name="catatan" id="" >{{ $item['note']}}</textarea></td>
                                    <td style="color: black"><a href="/cetak/accident/{{ $s->id}}" class="btn btn-primary" target="_blank">CETAK PDF</a></td>
                                    
                                    @endforeach
                                </tr>
                                <tr class="spacer"></tr>
                              @endforeach               
                            </tbody>
                        </table>
                    </div> 

                </div>
                <div class="tab-pane fade" id="kendaraan" role="tabpanel">
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2" >
                           
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
                                @foreach ($satpam as $s)
                                <tr class="tr-shadow">
                                    
                                    <td style="color: black"> {{$s ->profils['Name']}}</td>
                                    <td style="color: black">
                                        <span >{{ $s -> client->name }}</span>
                                    </td>
                                    @foreach ($s ->vehicle as $item)
                                    <td style="color: black">
                                        {{ $item['Date'] }}
                                    </td>
                                    <td style="color: black"> {{ $item['Time_in'] }} </td>
                                    <td style="color: black"> {{ $item['Time_out'] }}</td>
                                    <td style="color: black"> {{ $item['Driver_name']}}</td>
                                    <td style="color: black"> {{ $item['vehicle_num']}}</td>
                                    <td style="color: black"> <textarea name="catatan" id="" >{{ $item['note']}}</textarea> </td>
                                    @endforeach
                                </tr>
                                <tr class="spacer"></tr>
                              @endforeach                   
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="tamu" role="tabpanel">
                    
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                           
                            <thead>
                                <tr>
                                    
                                    <th>Nama Satpam</th>
                                    <th>Kantor</th>
                                    <th>Alamat</th>
                                    <th>No Telp.</th>
                                    <th>Keperluan</th>
                                    <th>Perusahaan Tamu</th>
                                    <th>Unduh</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($satpam as $s)
                                <tr class="tr-shadow">
                                    
                                    <td style="color: black"> {{$s ->profils['Name']}}</td>
                                    <td style="color: black">
                                        <span >{{ $s -> client->name }}</span>
                                    </td>
                                    @foreach ($s ->guest as $item)
                                    <td style="color: black">
                                        <span >{{ $item['address']}}</span>
                                    </td>
                                    <td style="color: black"> {{ $item['phone_num']}}</td>
                                    <td style="color: black"> {{ $item['requirement']}}</td>
                                    <td style="color: black"> {{ $item['company']}}</td>
                                    {{-- <td> <img src="file_attachment/fetch_image{{ $item['id'] }}" width="75"></td> --}}
                                    <td style="color: black"><a href="/cetak/guest/{{ $s->id}}" class="btn btn-primary" target="_blank">CETAK PDF</a></td>
                                    @endforeach
                                </tr>
                                <tr class="spacer"></tr>
                              @endforeach                   
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
</div>
</div>
@endsection