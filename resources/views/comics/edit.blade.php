@extends('layouts.app')

@section('content')
    <div id="comicCardMain" class="full_box">
        <div class="my_box_container py-3 position-relative">
            <div id="container_form">
                <h2>Edit the Comic: {{ $comic['title'] }}</h2>
                <form method="POST" action="{{ route('comics.update', $comic->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title"
                            value="{{ old('title', $comic['title']) }}" required>
                        @error('title')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="desc"
                            value="{{ old('description', $comic['description']) }}" required>
                        @error('description')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb Path</label>
                        <input type="text" class="form-control" name="thumb" id="thumb"
                            value="{{ old('thumb', $comic['thumb']) }}" required>
                        @error('thumb')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price"
                            value="{{ old('price', $comic['price']) }}" required>
                        @error('price')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" name="series" id="series"
                            value="{{ old('series', $comic['series']) }}" required>
                        @error('series')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="text" class="form-control" name="sale_date" id="sale_date"
                            value="{{ old('sale_date', $comic['sale_date']) }}" required>
                        @error('sale_date')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" name="type" id="type"
                            value="{{ old('type', $comic['type']) }}" required>
                        @error('type')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
