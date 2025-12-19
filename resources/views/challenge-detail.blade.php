@extends('layouts.app')

@section('content')
<section class="challenge-detail">
    <h1>{{ $challenge['title'] }}</h1>

    <p>{{ $challenge['description'] }}</p>

    <h3>Aturan Tantangan</h3>
    <ul>
        @foreach ($challenge['rules'] as $rule)
            <li>{{ $rule }}</li>
        @endforeach
    </ul>

    <p><strong>Poin:</strong> {{ $challenge['points'] }}</p>

    <button class="btn-join">Ikuti Tantangan</button>
</section>
@endsection