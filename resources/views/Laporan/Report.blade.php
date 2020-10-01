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
                        <table class="table table-data2" id="dataTable">
                        
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
                                @foreach ($accident as $s)
                                <tr class="tr-shadow">
                                    
                                    <td style="color: black"> {{$s ->satpam->profils['Name']}}</td>
                                    <td style="color: black">
                                        <span >{{ $s -> client->name }}</span>
                                    </td>
                                   
                                    <td style="color: black">
                                        {{ $s['Incident'] }}
                                    </td>
                                    <td style="color: black"> {{ $s['Tindak_lanjut'] }} </td>
                                    <td style="color: black"> <textarea name="catatan" id="" >{{ $s['note']}}</textarea></td>
                                    <td style="color: black"><a href="/cetak/accident/{{ $s->id}}" class="btn btn-primary" target="_blank">CETAK PDF</a></td>
                                    
                                   
                                </tr>
                                
                              @endforeach               
                            </tbody>
                        </table>
                    </div> 

                </div>
                <div class="tab-pane fade" id="kendaraan" role="tabpanel">
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
                <div class="tab-pane fade" id="tamu" role="tabpanel">
                    
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2" id="dataTable">
                           
                            <thead>
                                <tr>
                                    
                                    <th>Nama Satpam</th>
                                    <th>Kantor</th>
                                    <th>Alamat</th>
                                    <th>Perusahaan Tamu</th>
                                    <th>Unduh</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guest as $s)
                                <tr class="tr-shadow">
                                    
                                    <td style="color: black"> {{$s ->satpam->profils['Name']}}</td>
                                    <td style="color: black">
                                        <span >{{ $s ->satpam-> client->name }}</span>
                                    </td>
                                    
                                    <td style="color: black">
                                        
                                        <span >{{ $s->address}}</span>
                                        
                                    </td>
                                    <td style="color: black">{{ $s->company}}</td>
                                    
                                    {{-- <td> <img src="file_attachment/fetch_image{{ $item['id'] }}" width="75"></td> --}}
                                    <td style="color: black">
                                        <a href="/cetak/guest/{{ $s->id_guest }}" class="btn btn-primary" target="_blank">PDF</a>
                                        
                                    </td>
                                    
                                </tr>
                                
                              @endforeach                   
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
</div>
</div>
@endsection