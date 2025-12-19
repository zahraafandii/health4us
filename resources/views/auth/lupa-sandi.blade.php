@extends('layouts.app')

@section('title', 'Health4Us - Lupa Kata Sandi')

@section('content')
<div class="auth">

    <div class="auth-left">
        <img src="/asset/background.png" class="auth-background-img" alt="background">
    </div>

    <div class="auth-right">
        <div class="auth-wrapper">

            <h1 class="auth-title">Lupa Kata Sandi Anda?</h1>

            <p class="desc">
                Silakan masukkan alamat email terdaftar Anda untuk menerima <br>
                tautan reset kata sandi.
            </p>

            <label>Email <span class="required">*</span></label>

            <div class="auth-box">
                <input type="email" placeholder="username@gmail.com">
            </div>

            <a href="/password/create">
                <button class="auth-btn">Kirim Tautan Reset</button>
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