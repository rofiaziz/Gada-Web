@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Buat Paket Outsourcing</title>
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
                <b>Buat Paket Outsourcing</b></h3>
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
                      <p class="card-title" style="text-align:center; font-size:25px; color: black;"><b>Tambah Jadwal Satpam</b></p>
                    </div>
                    <div class="card-body">
                        
                      <form method="post" action="/Package/store">
                        
                        {{ csrf_field() }}

                          <div class="row">

                            <div class="col-md-4 ">
                              <div class="form-group">
                                <h5 label>Nama Paket</label>
                                <input type="text" name="Nama" class="form-control" placeholder="">
                                  @if($errors->has('Nama'))
                                  <div class="text-danger">
                                      {{ $errors->first('Nama')}}
                                  </div>
                                  @endif
                              </div>
                            </div>

                            <div class="col-md-4 ">
                              <div class="form-group">
                                <h5 label>Batas Satpam</label>
                                <input type="text" name="Batas" class="form-control" placeholder="Dalam Angka">
                                  @if($errors->has('Batas'))
                                  <div class="text-danger">
                                      {{ $errors->first('Batas')}}
                                  </div>
                                  @endif
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Harga</label>
                                <input type="text" name="Harga" class="form-control" placeholder="100000">
                                    @if($errors->has('Harga'))
                                    <div class="text-danger">
                                            {{ $errors->first('Harga')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <h5 label>Detail</label>
                                <textarea name="Detail" class="form-control" id=""  placeholder=""></textarea>
                                     @if($errors->has('Detail'))
                                     <div class="text-danger">
                                    {{ $errors->first('Detail')}}
                                     </div>
                                    @endif
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