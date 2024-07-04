<div id="comicCardMain" class="full_box">
    <div class="my_box_container py-3 position-relative">
        <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true"
            slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100"
            coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
            @foreach ($comics as $indice => $comic)
                <swiper-slide>
                    <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic['thumb'] }}"
                            alt="" /></a>
                    <h3 class="mb-0">{{ $comic['title'] }}</h3>
                </swiper-slide>
            @endforeach
        </swiper-container>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </div>
</div>
