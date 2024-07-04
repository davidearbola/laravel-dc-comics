@extends('layouts.app')

@section('content')
    @foreach ($comics as $comic)
        <h4>{{ $comic->title }}</h4>
        <p>{{ $comic->description }}</p>
        <img src="{{ $comic->thumb }}">
        <p>{{ $comic->price }}</p>
        <p>{{ $comic->series }}</p>
        <p>{{ $comic->sale_date }}</p>
        <p>{{ $comic->type }}</p>
        <a href="{{ route('comics.show', $comic->id) }}">Scopri di piu</a>
    @endforeach
@endsection
