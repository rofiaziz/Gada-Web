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
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="form-row">
                                <div class="col">
                                  <input type="text" class="au-input au-input--full" placeholder="Nama Depan">
                                </div>
                                <div class="col">
                                  <input type="text" class="au-input au-input--full" placeholder="Nama Belakang">
                                </div>
                              </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Perusahaan</label>
                            <input class="au-input au-input--full" type="text" name="Nama_perusahaan" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <div class="form-row">
                                <div class="col-7">
                                  <input type="text" class="au-input au-input--full" placeholder="Alamat">
                                </div>
                                <div class="col">
                                  <input type="text" class="au-input au-input--full" placeholder="Kota">
                                </div>
                                <div class="col">
                                  <input type="text" class="au-input au-input--full" placeholder="Provinsi">
                                </div>
                              </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <div class="form-row">
                                <div class="input-group mb-2">
                                    <input type="text" class="au-input" placeholder="Username" style="width:70%">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@ gmail.com</div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="Email">
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <input type="checkbox" name="aggree">Agree the terms and policy
                            </label>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Daftar</button>
                    </form>
                    <div class="register-link">
                        <p>
                            Sudah Punya Akun?
                            <a href="/Login">Masuk disini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection