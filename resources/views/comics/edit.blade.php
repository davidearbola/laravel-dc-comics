@extends('layouts.app')

@section('content')
    <div id="comicCardMain" class="full_box">
        <div class="my_box_container py-3 position-relative">
            <div id="container_form">
                <h2>Edit the Comic: {{ $comic['title'] }}</h2>
                <form method="POST" action="{{ route('comics.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title"
                            value="{{ $comic['title'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="desc"
                            value="{{ $comic['description'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb Path</label>
                        <input type="text" class="form-control" name="thumb" id="thumb"
                            value="{{ $comic['thumb'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price"
                            value="{{ $comic['price'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" name="series" id="series"
                            value="{{ $comic['series'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="text" class="form-control" name="sale_date" id="sale_date"
                            value="{{ $comic['sale_date'] }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" name="type" id="type"
                            value="{{ $comic['type'] }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
