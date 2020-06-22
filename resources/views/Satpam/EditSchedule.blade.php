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
                        
                      <form method="post" action="/Satpam/Addschedule/update/ {{$schedule->id_schedule}}">
                        
                        {{ csrf_field() }}

                          <div class="row">

                            <div class="col-md-6 ">
                              <div class="form-group">
                                <h5 label>tanggal</label>
                                <input type="date" name="tanggal" class="form-control" placeholder="" value="{{$schedule->date}}">
                                  @if($errors->has('tanggal'))
                                  <div class="text-danger">
                                      {{ $errors->first('tanggal')}}
                                  </div>
                                  @endif
                              </div>
                            </div>

                            <div class="col-md-6 ">
                              <div class="form-group">
                                <h5 label>Bulan Saat ini</label>
                                <input type="text" name="bulan" class="form-control" placeholder="Dalam Angka" value="{{$schedule->month}}">
                                  @if($errors->has('bulan'))
                                  <div class="text-danger">
                                      {{ $errors->first('bulan')}}
                                  </div>
                                  @endif
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <h5 label>Shift</label>
                                <input type="text" name="shift" class="form-control" placeholder="Shift pagi" value="{{$schedule->shift}}">
                                    @if($errors->has('shift'))
                                    <div class="text-danger">
                                            {{ $errors->first('shift')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <h5 label>Waktu Cek in</label>
                                <input type="time" name="time" class="form-control" placeholder="" value="{{$schedule->check_in}}">
                                    @if($errors->has('time'))
                                    <div class="text-danger">
                                            {{ $errors->first('time')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <h5 label>Waktu Cek out</label>
                                <input type="time" name="time1" class="form-control" placeholder=""  value="{{$schedule->check_out}}">
                                    @if($errors->has('time1'))
                                    <div class="text-danger">
                                            {{ $errors->first('time1')}}
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