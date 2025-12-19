@extends('layouts.app')

@section('title', 'Health4Us - Buat Kata Sandi Baru')

@section('content')
<div class="auth">

    <div class="auth-left">
        <img src="/asset/background.png" class="auth-background-img" alt="background">
    </div>

    <div class="auth-right">
        <div class="auth-wrapper">

            <h1 class="auth-title">Buat Kata Sandi Baru</h1>

            <p class="desc">
                Masukkan dan konfirmasikan kata sandi baru Anda di bawah ini.
            </p>

            <label>Kata Sandi <span class="required">*</span></label>
            <div class="auth-box">
                <input type="password" class="passwordField" placeholder="kata sandi baru">
                <img src="/asset/eye-close.svg" class="auth-toggle-password" alt="show/hide">
            </div>

            <label>Konfirmasi Kata Sandi <span class="required">*</span></label>
            <div class="auth-box">
                <input type="password" class="passwordField" placeholder="konfirmasi kata sandi">
                <img src="/asset/eye-close.svg" class="auth-toggle-password" alt="show/hide">
            </div>

            <a href="/">
                <button class="auth-btn">Ubah Kata Sandi</button>
            </a>
            
            <p class="option">
                Sudah memiliki akun?
                <a href="/masuk">Masuk</a>
            </p>
        </div>

        <img src="/asset/mascot.png" class="auth-mascot" alt="mascot">
    </div>

</div>
@endsection

@section('scripts')
    <script src="{{ asset('javaScript/buat-sandi.js') }}"></script>
@endsection