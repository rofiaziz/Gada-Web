@extends('/Layouts/MasterLayouts')
@section('Title')
    <title>
        GadaMaxima - Permintaan Konfirmasi Satpam
    </title>
@endsection 

@section('layout')
<div class="user-data m-b-30">
        <h3 class="title-3 m-b-30">
            <i class="zmdi zmdi-account-calendar"></i>Daftar Permintaan Akun Satpam</h3>
        <div class="filters m-b-45">
            <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                <select class="js-select2" name="property">
                    <option selected="selected">All Properties</option>
                    <option value="">Products</option>
                    <option value="">Services</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
            <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                <select class="js-select2 au-select-dark" name="time">
                    <option selected="selected">All Time</option>
                    <option value="">By Month</option>
                    <option value="">By Day</option>
                </select>
                <div class="dropDownSelect2"></div>
            </div>
        </div>
        <div class="table-responsive table-data">
            <table class="table">
                <thead>
                    <tr>
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>Nama</td>
                        <td>Strata</td>
                        <td>Alamat</td>
                        <td>Status</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    {{-- LOOP START --}}
                    @foreach ($satpam as $row)
                    
                    <tr>
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <div class="table-data__info">
                                <h6>{{ $row -> name }}</h6>
                                <span>
                                    <a href="#">{{ $row -> email }}</a>
                                </span>
                            </div>
                        </td>
                        <td>
                           master
                        </td>
                        <td>
                            {{ $row -> acc_state }}
                        </td>
                        <td>
                            <span class="role admin">Belum Aktif</span>
                        </td>
                        {{-- <td>
                            <div class="table-data-feature">
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
                        </td> --}}
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