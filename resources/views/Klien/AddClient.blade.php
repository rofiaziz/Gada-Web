@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Daftar Klien</title>
@endsection
@section('ExtraFont')
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
@endsection
@section('layout')
<div class="row">
    <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <h3 class="title-3 m-b-30" style="font-size:45px;" >
                <i class="zmdi zmdi-account-calendar" ></i>
                <b>Tambah Klien</b></h3>
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
                      <?php
                      $parameter= Crypt::encrypt(Auth::user()->id);
                       ?> 
                      <form method="post" action="/Client/store/{{$parameter}}">

                        {{ csrf_field() }}

                          <div class="row">

                            <div class="col-md-6 ">
                              <div class="form-group">
                                <h5 label>Nama Perusahaan Klien</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                                  @if($errors->has('name'))
                                  <div class="text-danger">
                                      {{ $errors->first('name')}}
                                  </div>
                                  @endif
                              </div>
                            </div>

                            <div class="col-md-6 ">
                              <div class="form-group">
                                <h5 label>MoU</label>
                                <input type="text" name="mou" class="form-control" placeholder="">
                                  @if($errors->has('mou'))
                                  <div class="text-danger">
                                      {{ $errors->first('mou')}}
                                  </div>
                                  @endif
                              </div>
                            </div>

                            <div class="col-md-6 ">
                              <div class="form-group">
                                <h5 label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="">
                                  @if($errors->has('email'))
                                  <div class="text-danger">
                                      {{ $errors->first('email')}}
                                  </div>
                                  @endif
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <h5 label>Password</label>
                                <input type="text" name="password" class="form-control" placeholder="">
                                    @if($errors->has('password'))
                                    <div class="text-danger">
                                            {{ $errors->first('password')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 labe>Kota Perusahaan</label>
                                <input type="text" name="location" class="form-control" placeholder="">
                                    @if($errors->has('location'))
                                    <div class="text-danger">
                                            {{ $errors->first('location')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Berlangganan Sampai</label>
                                <input type="text" name="Duration" class="form-control" placeholder="Tahun-Bulan-Tanggal ">
                                    @if($errors->has('Duration'))
                                    <div class="text-danger">
                                            {{ $errors->first('Duration')}}
                                     </div>
                                    @endif
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Jumlah Satpam Aktif</label>
                                <input type="text" name="satpam" class="form-control" placeholder="123">
                                    @if($errors->has('satpam'))
                                    <div class="text-danger">
                                            {{ $errors->first('satpam')}}
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