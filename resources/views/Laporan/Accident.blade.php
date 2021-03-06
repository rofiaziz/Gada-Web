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
            <b>Laporan Kejadian </b></h3>
        </h3>
             <div class="table-responsive table-responsive-data2">
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
</div>
@endsection