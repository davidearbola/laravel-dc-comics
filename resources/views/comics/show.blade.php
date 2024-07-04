@extends('layouts.app')

@section('content')
    <div id="comicCardMain" class="full_box">
        <div class="my_box_container py-3 position-relative">
            <div class="row">
                <div class="col-2">
                    <img class="w-100" src="{{ $comic->thumb }}">
                </div>
                <div class="col-10">
                    <h3>{{ $comic->title }}</h3>
                    <p>{{ $comic->description }}</p>
                    <p>Prezzo: {{ $comic->price }}</p>
                    <span>Serie: {{ $comic->series }}</span><br>
                    <span>Pubblicazione: {{ $comic->sale_date }}</span><br>
                    <span>Categoria: {{ $comic->type }}</span><br>
                </div>
            </div>
        </div>
    </div>
@endsection
