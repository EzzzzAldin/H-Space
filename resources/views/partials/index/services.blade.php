<section class="services container">
    <div class="title">Services</div>
    <div class="largTitle">What we do offer</div>
    <div class="owlSection1 owl-carousel owl-theme">
        <div class="item">
            <div class="">
                <img src="" alt="">
                <div class="dis">Web<br>Development</div>
                <div class="icon"></div>
            </div>
        </div>
        <div class="item">
            <div class="">
                <img src="" alt="">
                <div class="dis">Web<br>Development</div>
                <div class="icon"></div>
            </div>
        </div>
        <div class="item">
            <div class="">
                <img src="" alt="">
                <div class="dis">Web<br>Development</div>
                <div class="icon"></div>
            </div>
        </div>
        <div class="item">
            <div class="">
                <img src="" alt="">
                <div class="dis">Web<br>Development</div>
                <div class="icon"></div>
            </div>
        </div>
        <div class="item">
            <div class="">
                <img src="" alt="">
                <div class="dis">Web<br>Development</div>
                <div class="icon"></div>
            </div>
        </div>
    </div>
</section>
@push('scripts')
    <script>
        $('.owlSection1').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
@endpush
