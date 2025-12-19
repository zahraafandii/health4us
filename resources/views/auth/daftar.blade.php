@extends('layouts.app')

@section('title', 'Health4Us - Daftar')

@section('content')
<div class="auth">

    <div class="auth-left">
        <img src="/asset/background.png" class="auth-background-img" alt="background">
    </div>

    <div class="auth-right">
        <div class="auth-wrapper">

            <h1 class="auth-title">Mulailah Perjalanan Anda <br>
            dengan Health4Us!</h1>

            <label>Nama <span class="required">*</span></label>
            <div class="auth-box">
                <input type="name" placeholder="nama">
            </div>

            <label>Email <span class="required">*</span></label>
            <div class="auth-box">
                <input type="email" placeholder="username@gmail.com">
            </div>

            <label>Kata Sandi <span class="required">*</span></label>
            <div class="auth-box">
                <input type="password" id="passwordField" placeholder="kata sandi">
                <img src="/asset/eye-close.svg" class="auth-toggle-password" id="togglePassword" alt="show/hide">
            </div>

            <a href="/masuk">
                <button class="auth-btn">Daftar</button>
            </a>
            
            <div class="divider">Atau masuk dengan</div>

            <button class="google-btn"> <img src="/asset/google.svg" class="google-icon" alt="google icon"> Google</button>

            <p class="option">
                Sudah memiliki akun?
                <a href="/masuk">Masuk</a>
            </p>
        </div>

        <img src="/asset/mascot.png" class="auth-mascot" alt="mascot">
    </div>

</div>

<div class="dark-overlay"></div>

<div class="google-popup" id="googlePopup">
    <div class="popup-box">
        <h2 class="popup-title">Pilih akun</h2>

        <div class="account-option">
            <img src="/asset/google.svg" class="popup-avatar">
            <div class="account-info">
                <div class="account-name">Zahra Annisa</div>
                <div class="account-email">zahra.annisa0606@gmail.com</div>
            </div>
        </div>

        <div class="account-option">
            <img src="/asset/mascot.png" class="popup-avatar">
            <div class="account-info">
                <div class="account-name">HealthyLife</div>
                <div class="account-email">he4ltlhyl1fe@gmail.com</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('javaScript/masuk-daftar.js') }}"></script>
@endsection