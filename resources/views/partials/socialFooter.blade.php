<div id="socialFooter" class="box_social">
    <div class="my_box_container">
        <div class="row align-items-center justify-content-between">
            <div class="col-2">
                <div class="my_border">SIGN UP NOW!</div>
            </div>
            <div class="col-6">
                <div class="row align-items-center justify-content-between">
                    <div class="col-5 text-end">
                        <h5 class="follow_text m-0">FOLLOW US</h5>
                    </div>
                    <div class="col-7 d-flex gap-4">
                        <img v-for="img in socialIcon" src="{{ asset('images/footer-facebook.png') }}" />
                        <img v-for="img in socialIcon" src="{{ asset('images/footer-periscope.png') }}" />
                        <img v-for="img in socialIcon" src="{{ asset('images/footer-pinterest.png') }}" />
                        <img v-for="img in socialIcon" src="{{ asset('images/footer-twitter.png') }}" />
                        <img v-for="img in socialIcon" src="{{ asset('images/footer-youtube.png') }}" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
