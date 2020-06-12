@extends('/Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Akun Satpam</title>
@endsection


@section('layout')
<div class="row">
    <div class="col-md-12" style="background-color:#CCD4D4; padding-top:5px; padding-bottom:10px; border-radius:30px">
        
        <h3 class="title-3 m-b-30" style="font-size:45px;">
            <i class="zmdi zmdi-account-calendar" ></i><b>Daftar Akun Satpam</b></h3>
        <div class="table-data__tool">
            <div class="table-data__tool-right">
                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>nambah satpam</button>
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

        <!-- DATA TABLE -->
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </th>
                        <th><b style="font-size:20px; color: black">Nama</b></th>
                        <th><b style="font-size:20px; color: black">Email</b></th>
                        <th><b style="font-size:20px; color: black">Strata</b></th>
                        <th><b style="font-size:20px; color: black">Status</b></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($satpam as $akun)
                     
                    <tr class="tr-shadow">
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td><p style="color: black">{{ $akun->name }}</td>
                        <td>
                            <span class="block-email"><p style="color: black">{{ $akun->email }}</span>
                        </td>
                        
                        <td><span class="role cabang" style="text-align:center; line-height:1.5;">{{ $akun->acc_state }}</span></td>
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