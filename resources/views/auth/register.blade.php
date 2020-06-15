@extends('Login-Register/Layouts-InOut')

@section('Title')
<title>GadaMaxima - Daftar</title>
@endsection

@section('ExtraFont')
<link href="https://fonts.googleapis.com/css?family=Oxanium&display=swap" rel="stylesheet"> 
@endsection

@section('Layouts')
<div class="page-content--bge5-register">
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
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
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
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" >Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            
                        </div>

                                               
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Daftar</button>
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