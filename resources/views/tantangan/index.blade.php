@extends('layouts.app')

@section('content')

<div class="banner">
    <img src="/asset/banner.png" class="banner-img" alt="Banner Tantangan">
</div>

<div class="container">

    <div class="kategori-container">
        <button class="kategori-btn" onclick="scrollToSection('lari')">
            <i class="fa-solid fa-person-running"></i>
            Lari
        </button>

        <button class="kategori-btn" onclick="scrollToSection('bersepeda')">
            <i class="fa-solid fa-bicycle"></i>
            Sepeda
        </button>

        <button class="kategori-btn" onclick="scrollToSection('renang')">
            <i class="fa-solid fa-water"></i>
            Renang
        </button>
    </div>

    <script>
    function scrollToSection(id){
        const el = document.getElementById(id);
        if(el) el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
    </script>

    @foreach ($kategori as $key => $list)
        <section id="{{ $key }}" class="section-box">
            <h2 class="section-title">{{ ucfirst($key) }}</h2>

            <div class="card-wrapper">
                @foreach ($list as $item)
                    <div class="card">
                        <img src="{{ $item['gambar'] }}" alt="{{ $item['judul'] }}" class="card-img">
                        <div class="card-body">
                            <h3>{{ $item['judul'] }}</h3>
                            <p>{{ $item['deskripsi'] }}</p>
                            <a href="{{ route('tantangan.show', $item['slug']) }}" class="lihat-btn">Lihat Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endforeach

</div>

@endsection