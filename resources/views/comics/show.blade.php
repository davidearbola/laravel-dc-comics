@extends('layouts.app')

@section('content')
    <h4>{{ $comic->title }}</h4>
    <p>{{ $comic->description }}</p>
    <img src="{{ $comic->thumb }}">
    <p>{{ $comic->price }}</p>
    <p>{{ $comic->series }}</p>
    <p>{{ $comic->sale_date }}</p>
    <p>{{ $comic->type }}</p>
@endsection
