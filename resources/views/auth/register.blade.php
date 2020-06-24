@extends('Login-Register/Layouts-InOut')

@section('Title')
<title>GadaMaxima - Daftar</title>
@endsection

@section('ExtraFont')
<link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet"> 
@endsection

@section('Layouts')
<div class="page-content---register">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img src="{{URL::asset('images/icon/logo.png')}}" alt="CoolAdmin" style="max-width:70%">
                    </a>
                </div>
                <h4 style="text-align: center; margin-bottom:40px;font-family: 'Oxanium', cursive; color:#EACB29; font-size:20px">Daftarkan Perusahaan Anda Sekarang</h4>
                <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} col-md-6">
                            <label label for="name">Nama</label>
                            <div class="form-row">
                                <div class="col">
                                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                  
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-md-6">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        
                        {{-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-md-6">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password-confirm" >Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            
                        </div> --}}
                            <div class="col-md-4">
                            <div class="form-group">
                              <label>Kota</label>
                              <input type="text" name="city" class="form-control" placeholder="">
                                  @if($errors->has('city'))
                                  <div class="text-danger">
                                          {{ $errors->first('city')}}
                                   </div>
                                  @endif
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Jumlah Client</label>
                              <input type="text" name="client" class="form-control" placeholder="123">
                                  @if($errors->has('client'))
                                  <div class="text-danger">
                                          {{ $errors->first('client')}}
                                   </div>
                                  @endif
                            </div>
                          </div>
                          
                          <div class="col-md-4">
                            <div class="form-group">
                              <label>Jumlah Satpam</label>
                              <input type="text" name="satpam" class="form-control" placeholder="123">
                                  @if($errors->has('satpam'))
                                  <div class="text-danger">
                                          {{ $errors->first('satpam')}}
                                   </div>
                                  @endif
                            </div>
                          </div>    
                          
                         
                          <div class="col-md-6 ">
                            <div class="form-group">
                              <label>Tentang perusahaan</label>
                              <input  class="form-control" name="about" placeholder="Perusahaan Bank" maxlength="25">
                                  @if($errors->has('about'))
                                  <div class="text-danger">
                                      {{ $errors->first('about')}}
                                  </div>
                                  @endif
                            </div>
                          </div>

                          <div class="col-md-6 ">
                            <div class="form-group">
                              <label>Masa Berlangganan (Bulan)</label>
                              <input  class="form-control" name="time" placeholder="12" maxlength="25">
                                  @if($errors->has('time'))
                                  <div class="text-danger">
                                      {{ $errors->first('time')}}
                                  </div>
                                  @endif
                            </div>
                          </div>

                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Alamat Lengkap</label>
                                <textarea class="form-control" name="address" placeholder=""></textarea>
                                  @if($errors->has('address'))
                                  <div class="text-danger">
                                      {{ $errors->first('address')}}
                                  </div>
                                  @endif
                            </div>
                          </div>
                          
                          

                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Daftar</button>
                    </div>
                    </form>
                    <div class="register-link">
                        <p>
                            Sudah Punya Akun?
                            <a href={{ url('/login')}}>Masuk disini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection