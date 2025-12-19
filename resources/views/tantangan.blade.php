@extends('layouts.app')

@section('title', 'Health4Us - Tantangan')

@section('content')
<div class="tantangan-page">
    <h1 class="judul">Tantangan</h1>
    <div class="kategori-wrapper">
        @foreach ($kategoriList as $kategori)
            <section class="kategori-section">
                <h2 class="kategori-title">{{ $kategori->nama }}</h2>

                <div class="card-container">
                    @foreach ($kategori->tantangan->take(3) as $t)
                        <div class="card">
                            <img src="{{ $t->gambar }}" alt="gambar">
                            <h3>{{ $t->nama }}</h3>
                            <p>{{ $t->deskripsi }}</p>
                            <form action="{{ route('tantangan.daftar', $t->id) }}" method="POST">
                                @csrf
                                <button class="btn-daftar">Daftar</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </section>
        @endforeach
    </div>
</div>
@endsection