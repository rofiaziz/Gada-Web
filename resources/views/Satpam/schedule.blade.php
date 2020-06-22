@extends('/Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Jadwal Satpam</title>
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
            <b>Jadwal Satpam</b></h3>
            <a href="/Satpam/Addschedule">
            <div class="table-data__tool">
                <div class="table-data__tool-right">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus" ></i>Tambah Jadwal Baru</button>
                    {{-- <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2" name="type">
                            <option selected="selected">Export</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div> --}}
                </div>
            </div>
        </a>
        </h3>
        
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
               
                <thead>
                    <tr>
                        <th>Kantor</th>
                        <th>Tanggal</th>
                        <th>Bulan</th>
                        <th>Shift</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schedule as $s)
                    <tr class="tr-shadow">
                        
                        <td style="color: black"> 
                            {{$s ->client['name']}}</td>
                        <td style="color: black">
                            <span >{{ $s -> date }}</span>
                        </td>
                        <td style="color: black"> {{ $s -> month }}  
                        </td>
                        <td style="color: black"> {{ $s -> shift }}</td>
                        
                        {{-- <td><span class="role cabang" style="text-align:center; line-height:1.5;">Master</span></td> --}}
                        <td class="desc">{{ $s -> check_in }}</td>
                        <td>
                            <span class="status--active">{{ $s -> check_out }}</span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <a href="/Satpam/Addschedule/edit/{{ $s->id_schedule }}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Ubah">
                                        <i class="zmdi zmdi-edit" ></i> 
                                    </button>
                                </a>
                                <a href="/Satpam/Addschedule/delete/{{ $s->id_schedule }}">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Hapus">
                                        <i class="zmdi zmdi-delete"></i>
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