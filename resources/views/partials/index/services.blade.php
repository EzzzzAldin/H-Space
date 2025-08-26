<section class="services container">
    <div class="main-info">
        <h2 class="main-title text-center">Services</h2>
        <p class="text-center mt-3 ">What we do offer</p>
    </div>
    <div class="swiper swiperSection1">
        <div class="swiper-wrapper">
            <div class="swiper-slide item">
                <div class="">
                    <img src="{{ asset('assets/imgs/Group 237615.png') }}" alt="">
                    <div class="dis">Web<br>Development</div>
                    <div class="icon"></div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="">
                    <img src="{{ asset('assets/imgs/Group 237615.png') }}" alt="">
                    <div class="dis">Web<br>Development</div>
                    <div class="icon"></div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="">
                    <img src="{{ asset('assets/imgs/Group 237615.png') }}" alt="">
                    <div class="dis">Web<br>Development</div>
                    <div class="icon"></div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="">
                    <img src="{{ asset('assets/imgs/Group 237615.png') }}" alt="">
                    <div class="dis">Web<br>Development</div>
                    <div class="icon"></div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="">
                    <img src="{{ asset('assets/imgs/Group 237615.png') }}" alt="">
                    <div class="dis">Web<br>Development</div>
                    <div class="icon"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('scripts')
    <script>
        const swiper2 = new Swiper('.swiperSection1', {
            loop: true,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20
                }
            }
        });
    </script>
@endpush
