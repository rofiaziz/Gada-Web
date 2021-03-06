@extends('/Layouts/MasterLayouts')
@section('Title')
    <title>
        GadaMaxima - Tagihan
    </title>
@endsection 

@section('layout')
<div class="user-data m-b-30">
        <h3 class="title-3 m-b-30">
            <i class="zmdi zmdi-account-calendar"></i>Daftar Tagihan</h3>
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
                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                    <i class="zmdi zmdi-plus"></i>add item</button>
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
                        <td>Nama Perusahaan</td>
                        <td>Jumlah Tagihan</td>
                        <td>Keterangan Tagihan</td>
                        <td>Tenggat Tagihan</td>
                        <td>Status</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    {{-- LOOP START --}}
                    <tr>
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <div class="table-data__info">
                                <h6>lori lynch</h6>
                                <span>
                                    <a href="#">johndoe@gmail.com</a>
                                </span>
                            </div>
                        </td>
                        <td>
                           100
                        </td>
                        <td>
                            Tagihan Bulan Maret
                        </td>
                        <td> 02-03-2020</td>
                        <td>
                            <span class="role admin">Belum Dibayar</span>
                        </td>
                        <td>
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
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <div class="table-data__info">
                                <h6>lori lynch</h6>
                                <span>
                                    <a href="#">johndoe@gmail.com</a>
                                </span>
                            </div>
                        </td>
                        <td>
                           100
                        </td>
                        <td>
                            Tagihan Bulan Maret
                        </td>
                        <td> 02-03-2020</td>
                        <td>
                            <span class="role admin">Belum Dibayar</span>
                        </td>
                        <td>
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
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <div class="table-data__info">
                                <h6>lori lynch</h6>
                                <span>
                                    <a href="#">johndoe@gmail.com</a>
                                </span>
                            </div>
                        </td>
                        <td>
                           100
                        </td>
                        <td>
                            Tagihan Bulan Maret
                        </td>
                        <td> 02-03-2020</td>
                        <td>
                            <span class="role admin">Belum dibayar</span>
                        </td>
                        <td>
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
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <div class="table-data__info">
                                <h6>lori lynch</h6>
                                <span>
                                    <a href="#">johndoe@gmail.com</a>
                                </span>
                            </div>
                        </td>
                        <td>
                           100
                        </td>
                        <td>
                            Tagihan Bulan Maret
                        </td>
                        <td> 02-03-2020</td>
                        <td>
                            <a href="/"><span class="role admin">Belum Dibayar</span></a>
                        </td>
                        <td>
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
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="user-data__footer">
            <button class="au-btn au-btn-load">load more</button>
        </div>
    </div>
@endsection