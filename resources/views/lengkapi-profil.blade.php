@extends('layouts.app')

@section('title', 'Lengkapi Profil - Health4Us')

@section('content')

<div class="container profile-container">
    <div class="text-center profile-header">
        <h1>Halo [Nama Pengguna], <br> Mohon Lengkapi Profil Anda!</h1>
    </div>
    
    <form action="{{ route('profil.update') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-4 mb-4">
                <h2 class="column-title">Data Pribadi</h2>
                <div class="mb-4">
                    <label for="nama" class="form-label">Nama<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="[nama]" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">Alamat Email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="[email]" required>
                </div>

                <div class="mb-4">
                    <label for="kata-sandi" class="form-label">Kata Sandi<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="kata-sandi" name="kata-sandi" placeholder="[kata sandi]" required>
                </div>
                
                <div class="mb-4">
                    <label for="nomor-telepon" class="form-label">Nomor Telepon<span class="text-danger">*</span></label>
                    <input type="tel" class="form-control" id="nomor-telepon" name="nomor-telepon" placeholder="[nomor telepon]" required>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <h2 class="column-title">Rincian Kesehatan</h2>
                
                <div class="mb-4">
                    <label for="jenis-kelamin" class="form-label">Jenis Kelamin<span class="text-danger">*</span></label>
                    <select class="form-select" id="jenis-kelamin" name="jenis-kelamin" required>
                        <option value="" disabled selected>[jenis kelamin]</option>
                        <option value="laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="tinggi-badan" class="form-label">Tinggi Badan<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="tinggi-badan" name="tinggi-badan" placeholder="[tinggi]" min="1" required>
                </div>
                
                <div class="mb-4">
                    <label for="berat-badan" class="form-label">Berat Badan<span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="berat-badan" name="berat-badan" placeholder="[berat]" min="1" required>
                </div>
                
                <div class="mb-4">
                    <label for="tanggal-lahir" class="form-label">Tanggal Lahir<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="tanggal-lahir" name="tanggal-lahir" placeholder="[dd/mm/yyyy]" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <h2 class="column-title">Integrasi Aplikasi</h2>

                <div class="mb-4">
                    <label for="kota-kabupaten" class="form-label">Kota/Kabupaten<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="kota-kabupaten" name="kota-kabupaten" placeholder="[kota/kabupaten]" required>
                </div>
                
                <div class="mb-4">
                    <label for="aplikasi-kesehatan" class="form-label">Aplikasi Kesehatan<span class="text-danger">*</span></label>
                    <select class="form-select" id="aplikasi-kesehatan" name="aplikasi-kesehatan" required>
                        <option value="" disabled selected>Hubungkan ke Aplikasi Kesehatan</option>
                        <option value="google_fit">Google Fit</option>
                        <option value="apple_health">Apple Health</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label for="e-wallet" class="form-label">E-Wallet<span class="text-danger">*</span></label>
                    <select class="form-select" id="e-wallet" name="e-wallet" required>
                        <option value="" disabled selected>Hubungkan ke E-Wallet</option>
                        <option value="gopay">GoPay</option>
                        <option value="ovo">OVO</option>
                        <option value="dana">DANA</option>
                        <option value="shopeepay">ShopeePay</option>
                    </select>
                </div>
                
                <div style="height: 90px;"></div> 
            </div>
        </div>
        
        <div class="d-flex justify-content-end mt-4 me-3">
            <button type="submit" class="btn btn-simpan">Simpan</button>
        </div>
    </form>
</div>

@endsection