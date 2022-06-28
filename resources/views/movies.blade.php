@extends('layouts.app')

@section('title')
    DB Movies | Movies
@endsection


@section('main_content')
    <h2>
        Lista film:
    </h2>


    @foreach ($movies as $movie)
    <div class="movie-card">
        <h4>Titolo: {{ $movie->title }}</h4>
        <h5>{{ $movie->original_title }}</h5>
        <p>Nazionalità: {{ $movie->nationality }}</p>
        <p>Data di uscita: {{ $movie->date }}</p>
        <p>Valutazione utenti: {{ $movie->vote }}</p>
    </div>
    @endforeach
@endsection
