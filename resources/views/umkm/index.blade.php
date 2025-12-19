@extends('layouts.app')

@section('content')

<header class="umkm-hero">
    <div class="hero-image-container">
        <img src="{{ asset('asset/banner umkm.png') }}" class="hero-bg-img" alt="Banner UMKM">
        <div class="hero-overlay">
            <div class="hero-content">
                <h1>Jadikan Hidup Lebih Sehat,<br>Dukung UMKM Lokal!</h1>
                <p>Kesehatan untuk mu, kesejahteraan bagi mereka.</p>
            </div>
        </div>
    </div>
    
    <div class="user-balance-badge">
        <div class="balance-pill">
            <img src="/asset/coin.png" class="coin-icon">
            <span class="balance-text">HealthKoin kamu: <strong>{{ number_format($healthkoin) }}</strong></span>
        </div>
    </div>
</header>

<div class="umkm-categories">
    <button class="umkm-cat active" data-filter="all">
        <span class="material-symbols-rounded">grid_view</span> Semua
    </button>
    
    <button class="umkm-cat" data-filter="makanan_minuman">
        <span class="material-symbols-rounded">fastfood</span> Makanan & Minuman
    </button>
            
    <button class="umkm-cat" data-filter="produk_olahraga">
        <span class="material-symbols-rounded">exercise</span> Produk Olahraga
    </button>
            
    <button class="umkm-cat" data-filter="pakaian">
        <span class="material-symbols-rounded">apparel</span> Pakaian/Mode
    </button>
</div>

<div class="umkm-cards">
    @foreach($kategori as $key => $items)
        @foreach($items as $item)
            <div class="umkm-card" data-kategori="{{ $key }}">
                @if(isset($item['label']) && $item['label'] != '')
                    <span class="umkm-badge">{{ $item['label'] }}</span>
                @endif
                        
                <img src="{{ $item['gambar'] }}" class="umkm-img">
                        
                <div class="umkm-card-body">
                    <h4 class="umkm-name">{{ $item['nama'] }}</h4>
                            
                    <div class="umkm-coins">
                        <img src="/asset/coin.png" class="coin-icon">
                        {{ $item['healthkoin'] }} HealthKoin
                    </div>
                            
                    <a href="/partner-umkm/{{ $item['slug'] }}" class="umkm-tukar-btn">
                        Tukar
                    </a>
                </div>
            </div>
        @endforeach
    @endforeach
</div>

@if(session('success'))
    <p style="color:green; margin-top:20px;">
        {{ session('success') }}
    </p>
@endif

@if(session('error'))
    <p style="color:red; margin-top:20px;">
        {{ session('error') }}
    </p>
@endif
@endsection

@section('scripts')
    <script src="{{ asset('javaScript/umkm.js') }}"></script>
@endsection