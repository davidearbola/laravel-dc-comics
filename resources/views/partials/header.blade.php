<div class="my_box_container">
    <div class="row align-items-center">
        <div class="col-12 col-md-2 text-center text-md-start mb-3 mb-md-0 p-0">
            <a href="{{ url('/') }}"><img src="{{ asset('images/dc-logo.png') }}" /></a>
        </div>
        <div id="linkMenu" class="col-12 col-md-10 p-0 gap-3 d-flex justify-content-end">
            @foreach ($store['linkMenu'] as $link)
                @if ($link == 'COMICS')
                    <a href="{{ route('comics.index') }}">{{ $link }}</a>
                @else
                    <a href="#">{{ $link }}</a>
                @endif
            @endforeach
            <a href="{{ route('comics.create') }}">NEW COMIC</a>
        </div>
    </div>
</div>
