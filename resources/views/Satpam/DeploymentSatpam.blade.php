@extends('/Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Penempatan Satpam</title>
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
            <b>Penempatan Satpam</b></h3>
        </h3>
        <div class="table-data__tool">
            <div class="table-data__tool-right">
                
                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                   
                </div>
            </div>
        </div>
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
               
                <thead>
                    <tr>
                        
                        <th>Nama</th>
                        <th>Email</th>
                        {{-- <th>Strata</th> --}}
                        <th>Perusahaan Penempatan</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($satpam as $s)
                    <tr class="tr-shadow">
                        
                        <td> {{$s ->profils->Name}}</td>
                        <td>
                            <span class="block-email">{{ $s -> email }}</span>
                        </td>
                        
                        {{-- <td><span class="role cabang" style="text-align:center; line-height:1.5;">Master</span></td> --}}
                        <td class="desc">{{ $s -> client->name }}</td>
                        <td>
                            <span class="status--active">Aktif</span>
                        </td>
                        <td>
                            <div class="table-data-feature">
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                                <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                    <i class="zmdi zmdi-more"></i>
                                </button>
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