@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Tambah Perusahaan</title>
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
                <b>Tambah Perusahaan Baru</b></h3>
        </div>
            {{-- <div class="col-md-6">
                <form class="form-header" action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Perusahaan" aria-label="Cari-Perusahaan" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                        </div>
                      </div>
            </form>
        </div> --}}
        </div>
        <!-- DATA TABLE-->
        <div class="content">
            <div class="row">
              <div class="col-md-8 offset-md-2">
                  <div class="card card-user">
                    <div class="card-header">
                      <p class="card-title" style="text-align:center; font-size:25px; color: black;"><b>Tambah Klien Baru</b></p>
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
                            <button type="submit" class="btn btn-primary btn-round" style="width:20rem; font-size:19px">Tambahkan</button>
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