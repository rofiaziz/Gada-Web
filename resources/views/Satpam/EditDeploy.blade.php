@extends('Layouts/MasterLayouts')

@section('Title')
    <title>GadaMaxima - Ubah Jadwal Satpam</title>
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
                <b>Ubah Jadwal Satpam</b></h3>
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
                      <p class="card-title" style="text-align:center; font-size:25px; color: black;"><b>Ubah Jadwal Satpam</b></p>
                    </div>
                    <div class="card-body">
                        
                      <form method="post" action="/Satpam/DeploymentSatpam/update/{{$satpam->id}}">
                        
                        {{ csrf_field() }}

                          <div class="row">

                            <div class="col-md-6 ">
                              <div class="form-group">
                                <h5 label>Nama</label>
                                <input type="text" name="nama" disabled class="form-control" placeholder="" value="{{$satpam ->profils->Name}}">
                                  
                              </div>
                            </div>

                            <div class="col-md-6 ">
                              <div class="form-group">
                                <h5 label>Email</label>
                                <input type="text" name="Email" disabled class="form-control" placeholder="" value="{{ $satpam -> email }}">
                                  
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="client">Pilih Klien</label>
                                <select name="client" required class="form-control">
                                  <option value="">Pilih Klien</option>
                                  @foreach($client as $s)
                                      <option value="{{ $s->client_id}}">
                                          {{ $s->name }}
                                      </option>
                                  @endforeach
                                </select>
                                  
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