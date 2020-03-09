@extends('Login-Register/Layouts-InOut')

@section('Title')
<title>GadaMaxima - Masuk</title>
@endsection

@section('Layouts')
<div class="page-content--bge5-login">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img src="{{URL::asset('images/icon/logo.png')}}" alt="CoolAdmin" style="max-width:70%">
                    </a>
                </div>
                <div class="login-form">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <input type="checkbox" name="remember">Ingat Saya
                            </label>
                            <label>
                                <a href="/Forgot-passwd">Lupa Password?</a>
                            </label>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Masuk</button>
                    </form>
                    <div class="register-link">
                        <p>
                            Belum Punya Akun?
                            <a href="/Register">Daftar di sini</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection