@extends('layouts.app')

@section('content')

<div class="main-wrapper">
    <section class="umkm-show-container">
        <div class="umkm-card-horizontal">
            
            <div class="card-left">
                @if(isset($product['label']) && $product['label'] != '')
                    <div class="badge-umkm">{{ $product['label'] }}</div>
                @endif
    
                <img src="{{ $product['gambar'] }}" alt="{{ $product['nama'] }}" class="product-img">
            </div>

            <div class="card-right">
                <h1 class="product-title">{{ $product['nama'] }}</h1>
                <p class="product-desc">
                    Produk UMKM pilihan yang diproses secara higienis dan mendukung kesehatan tubuh Anda.
                </p>

                <div class="price-section">
                    <div class="price-item">
                        <span class="price-label">SALDO HEALTHKOIN KAMU</span>
                        <div class="price-value">
                            <img src="/asset/coin.png" class="coin-icon">
                            <span>{{ number_format($healthkoin) }}</span>
                        </div>
                    </div>
                    <div class="price-item text-right">
                        <span class="price-label">HARGA PENUKARAN</span>
                        <div class="price-value">
                            <img src="/asset/coin.png" class="coin-icon">
                            <span>{{ number_format($product['healthkoin']) }}</span>
                        </div>
                    </div>
                </div>

                <form method="POST" action="/partner-umkm/{{ $product['slug'] }}/tukar">
                    @csrf
                    <button type="submit" class="btn-tukar-pill">Tukar Sekarang</button>
                </form>
            </div>

        </div>
    </section>
</div>

@if(session('success') || session('error'))
<div class="popup-overlay" id="statusPopup">
    <div class="popup-content {{ session('success') ? 'is-success' : 'is-error' }}">
        <div class="popup-icon">@if(session('success')) ✔ @else ✖ @endif</div>
        <h3>{{ session('success') ? 'Berhasil!' : 'Gagal!' }}</h3>
        <p>{{ session('success') ?? session('error') }}</p>
        <button class="popup-close-btn" onclick="document.getElementById('statusPopup').style.display='none'">Tutup</button>
    </div>
</div>
@endif
@endsection