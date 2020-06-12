@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Ubah Perusahaan</title>
@endsection
@section('ExtraFont')
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
@endsection
@section('layout')
<div class="row">
    <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title-3 m-b-30" style="font-size:45px;" >
                <i class="zmdi zmdi-account-calendar" ></i>
                <b>Ubah Data Perusahaan</b></h3>
            </div>  
        </div>
        <!-- DATA TABLE-->
        <div class="content">
            <div class="row">
              <div class="col-md-8 offset-md-2">
                  <div class="card card-user">
                    <div class="card-header">
                      <p class="card-title" style="text-align:center; font-size:25px; color: black;"><b>Ubah Data Perusahaan</b></p>
                    </div>
                    <div class="card-body">
                      <form>
                        
                        <div class="row">
                          <div class="col-md-12 ">
                            <div class="form-group">
                              <h5 label>Nama Perusahaan</label>
                              <input type="text" class="form-control" placeholder="Klien">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <h5 label>Kota</label>
                              <input type="text" class="form-control" placeholder="Kota Perusahaan">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <h5 label>Nomor MoU</label>
                              <input type="text" class="form-control" placeholder="MoU">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <h5 label>Kontak</label>
                              <input  class="form-control" placeholder="081xxx" maxlength="25">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <h5 label>Alamat Lengkap</label>
                                <textarea class="form-control" placeholder="Penjelasan"></textarea>
                            </div>
                          </div>
                        </div>
                      <div class="row">
                          <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round" style="width:20rem; font-size:19px">Ubah</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
              </div>
            </div>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>  
@endsection