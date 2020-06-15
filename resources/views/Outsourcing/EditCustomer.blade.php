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
                <b>Ubah Outsourcing</b></h3>
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
                      <p class="card-title" style="text-align:center; font-size:25px; color: black;"><b>Ubah Outsourcing</b></p>
                    </div>
                    <div class="card-body">

                      <form method="post" action="/Outsourcing/Update/{{ $company->id }} ">

                        {{ csrf_field() }}
                        {{-- {{ method_field('PUT') }} --}}

                          <div class="row">

                            <div class="col-md-12 ">
                              <div class="form-group">
                                <h5 label> Ubah Perusahaan Outsourcing </label>
                                <input type="text" name="name" class="form-control" placeholder="" value="{{$company->Name}}">  

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
                                <input type="text" name="email" class="form-control" placeholder="" value="{{ $company->user['email']}}"> 
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
                                <input type="text" name="password" class="form-control" placeholder="" value="{{ $company->user['password']}}" > 
                                    @if($errors->has('password'))
                                    <div class="text-danger">
                                            {{ $errors->first('password')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Kota</label>
                                <input type="text" name="city" class="form-control" placeholder="" value="{{ $company->City}}"> 
                                    @if($errors->has('city'))
                                    <div class="text-danger">
                                            {{ $errors->first('city')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Jumlah Client</label>
                                <input type="text" name="client" class="form-control" placeholder="123" value="{{ $company->Client_count  }}"> 
                                    @if($errors->has('client'))
                                    <div class="text-danger">
                                            {{ $errors->first('client')}}
                                     </div>
                                    @endif
                              </div>
                            </div>
                            
                            <div class="col-md-4">
                              <div class="form-group">
                                <h5 label>Jumlah Satpam</label>
                                <input type="text" name="satpam" class="form-control" placeholder="123" value="{{ $company->Satpam_count  }}"> 
                                    @if($errors->has('satpam'))
                                    <div class="text-danger">
                                            {{ $errors->first('satpam')}}
                                     </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <h5 label>Jenis Paket </label>
                                  <div class="col col-md-9">
                                    <div class="form-check">
                                      @foreach ($paket as $p)
                                        <div class="radio">
                                          <label for="radio1" class="form-check-label ">
                                           <input type="radio" id="radio1" name="paket" value="{{ $p-> id_package }}" class="form-check-input">{{ $p-> package_name }}
                                           @if($errors->has('paket'))
                                           <div class="text-danger">
                                                   {{ $errors->first('paket')}}
                                            </div>
                                           @endif
                                          </label>
                                             
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                              </div>
                            </div>
                           

                            <div class="col-md-6 ">
                              <div class="form-group">
                                <h5 label>Tentang perusahaan</label>
                                <input  class="form-control" name="about" placeholder="Perusahaan Bank" maxlength="25" value="{{ $company->About  }}"> 
                                    @if($errors->has('about'))
                                    <div class="text-danger">
                                        {{ $errors->first('about')}}
                                    </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-6 ">
                              <div class="form-group">
                                <h5 label>Masa Berlangganan (Bulan)</label>
                                <input  class="form-control" name="time" placeholder="12" maxlength="25" value="{{ $company->masa_berlangganan  }}"> 
                                    @if($errors->has('time'))
                                    <div class="text-danger">
                                        {{ $errors->first('time')}}
                                    </div>
                                    @endif
                              </div>
                            </div>

                            <div class="col-md-12">
                              <div class="form-group">
                                <h5 label>Alamat Lengkap</label>
                                  <textarea class="form-control" name="address" placeholder="">{{ $company->Address  }} </textarea>
                                    @if($errors->has('address'))
                                    <div class="text-danger">
                                        {{ $errors->first('address')}}
                                    </div>
                                    @endif
                              </div>
                            </div>
                          </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                              <button type="submit" class="btn btn-primary btn-round" style="width:20rem; font-size:19px">Simpan Perubahan</button>
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