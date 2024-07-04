<div id="linkFooter" class="box_link p-3">
    <div class="my_box_container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-4 d-flex flex-column gap-3">
                        <div class="d-flex flex-column">
                            <h3>{{ $store['linkFooter'][0]['titolo'] }}</h3>
                            @foreach ($store['linkFooter'][0]['link'] as $link)
                                <a href="#">{{ $link }}</a>
                            @endforeach
                        </div>
                        <div class="d-flex flex-column">
                            <h3>{{ $store['linkFooter'][1]['titolo'] }}</h3>
                            @foreach ($store['linkFooter'][1]['link'] as $link)
                                <a href="#">{{ $link }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex flex-column">
                            <h3>{{ $store['linkFooter'][2]['titolo'] }}</h3>
                            @foreach ($store['linkFooter'][2]['link'] as $link)
                                <a href="#">{{ $link }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex flex-column">
                            <h3>{{ $store['linkFooter'][3]['titolo'] }}</h3>
                            @foreach ($store['linkFooter'][3]['link'] as $link)
                                <a href="#">{{ $link }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo_box col-6"></div>
        </div>
    </div>
</div>
