@extends('layouts.app')

@section('content')

<img src="{{ asset('storage/'.$challenge->banner) }}" class="w-full h-64 object-cover mb-6">

<div class="px-6 mb-20">
    <h1 class="text-3xl font-bold mb-4">{{ $challenge->title }}</h1>

    <div class="bg-green-200 p-4 rounded mb-6">
        <div class="flex justify-between text-center">
            <div>
                📅 <p>{{ $challenge->date }}</p>
            </div>
            <div>
                📏 <p>{{ $challenge->distance }}</p>
            </div>
            <div>
                🎖️ <p>{{ $challenge->reward }}</p>
            </div>
        </div>
    </div>

    <div class="prose max-w-full">
        {!! nl2br(e($challenge->description)) !!}
    </div>

    <form action="{{ route('tantangan.daftar', $challenge->id) }}" method="POST">
        @csrf
        <button class="w-full bg-blue-700 text-white py-3 rounded mt-10">
            Daftar Sekarang
        </button>
    </form>
</div>

@endsection
