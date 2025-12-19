@extends('layouts.app')

@section('content')

<div class="detail-container">
    <img src="{{ $event['gambar'] }}" class="detail-img" alt="{{ $event['judul'] }}">

    <h1>{{ $event['judul'] }}</h1>
    <p>{{ $event['deskripsi'] }}</p>

    <form action="{{ route('tantangan.register', $event['slug']) }}" method="POST">
        @csrf
        <button class="daftar-btn">Daftar Sekarang</button>
    </form>
</div>

@endsection