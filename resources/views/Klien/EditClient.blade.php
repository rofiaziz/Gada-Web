@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Ubah Data Klien</title>
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
                <b>Ubah Data Klien</b></h3>
            </div>  
        </div>
        <!-- DATA TABLE-->
        <div class="content">
            <div class="row">
              <div class="col-md-8 offset-md-2">
                  <div class="card card-user">
                    <div class="card-header">
                      <p class="card-title" style="text-align:center; font-size:25px; color: black;"><b>Ubah Data Klien</b></p>
                    </div>
                    <div class="card-body">
                      <form method="post" action="/Client/Update/{{ $client->id }}">

                        {{ csrf_field() }}

                          <div class="row">

                            <div class="col-md-12 ">
                              <div class="form-group">
                                <h5 label>Nama Perusahaan Klien</label>
                                <input type="text" name="name" class="form-control" placeholder="" value="{{$client->name}}">
                                  @if($errors->has('name'))
                                  <div class="text-danger">
                                      {{ $errors->first('name')}}
                                  </div>
                                  @endif
                              </div>
                            </div>

                            <div class="col-md-6 ">
                              <div class="form-group">
                                <h5 label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="" value="{{$client->client_account['email']}}">
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
                                <input type="text" name="password" class="form-control" placeholder="" value="{{$client->client_account['password']}}">
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
                                <input type="text" name="location" class="form-control" placeholder=""value="{{$client->location}}">
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
                                <input type="text" name="Duration" class="form-control" placeholder="Tahun-Bulan-Tanggal "value="{{$client->valid_since}}">
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
                                <input type="text" name="satpam" class="form-control" placeholder="123" value="{{$client->security_active}}">
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