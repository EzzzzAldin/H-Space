<section class="services container">
    <div class="main-info">
        <h2 class="main-title text-center">Services</h2>
        <p class="text-center mt-3 ">What we do offer</p>
    </div>
    <div class="swiper swiperSection1">
        <div class="swiper-wrapper">
            <div class="swiper-slide item">
                <div class="align-items-center d-flex flex-column justify-content-around swiperItem swiperItemServ">
                    <div class="ship w-100 position-relative">
                        <div class="shipHeader">
                            <div class="ballsAndSquer">
                                <div class="ball"></div>
                                <div class="ball"></div>
                                <div class="ball"></div>
                                <div class="squer"></div>
                            </div>
                            <div class="shipBody position-relative">
                                <img src="{{ asset('assets/imgs/Group 237615.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="dis w-100">Web<br>Development</div>
                    <div class="d-flex icon justify-content-end w-100 ">
                        <div class="arrowicon"><i class="fa-solid fa-arrow-down-long"></i></div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="align-items-center d-flex flex-column justify-content-around swiperItem swiperItemServ">
                    <div class="ship w-100 position-relative">
                        <div class="shipHeader">
                            <div class="ballsAndSquer">
                                <div class="ball"></div>
                                <div class="ball"></div>
                                <div class="ball"></div>
                                <div class="squer"></div>
                            </div>
                            <div class="shipBody position-relative">
                                <img src="{{ asset('assets/imgs/Group 237615.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="dis w-100">Web<br>Development</div>
                    <div class="d-flex icon justify-content-end w-100">
                        <div class="arrowicon"><i class="fa-solid fa-arrow-down-long"></i></div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="align-items-center d-flex flex-column justify-content-around swiperItem swiperItemServ">
                    <div class="ship w-100 position-relative">
                        <div class="shipHeader">
                            <div class="ballsAndSquer">
                                <div class="ball"></div>
                                <div class="ball"></div>
                                <div class="ball"></div>
                                <div class="squer"></div>
                            </div>
                            <div class="shipBody position-relative">
                                <img src="{{ asset('assets/imgs/Group 237615.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="dis w-100">Web<br>Development</div>
                    <div class="d-flex icon justify-content-end w-100 ">
                        <div class="arrowicon"><i class="fa-solid fa-arrow-down-long"></i></div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="align-items-center d-flex flex-column justify-content-around swiperItem swiperItemServ">
                    <div class="ship w-100 position-relative">
                        <div class="shipHeader">
                            <div class="ballsAndSquer">
                                <div class="ball"></div>
                                <div class="ball"></div>
                                <div class="ball"></div>
                                <div class="squer"></div>
                            </div>
                            <div class="shipBody position-relative">
                                <img src="{{ asset('assets/imgs/Group 237615.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="dis w-100">Web<br>Development</div>
                    <div class="d-flex icon justify-content-end w-100 ">
                        <div class="arrowicon"><i class="fa-solid fa-arrow-down-long"></i></div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="align-items-center d-flex flex-column justify-content-around swiperItem swiperItemServ">
                    <div class="ship w-100 position-relative">
                        <div class="shipHeader">
                            <div class="ballsAndSquer">
                                <div class="ball"></div>
                                <div class="ball"></div>
                                <div class="ball"></div>
                                <div class="squer"></div>
                            </div>
                            <div class="shipBody position-relative">
                                <img src="{{ asset('assets/imgs/Group 237615.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="dis w-100">Web<br>Development</div>
                    <div class="d-flex icon justify-content-end w-100 ">
                        <div class="arrowicon"><i class="fa-solid fa-arrow-down-long"></i></div>
                    </div>
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
                    slidesPerView: 5,
                    spaceBetween: 30
                },
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20
                }
            }
        });
        $('.swiperItemServ').hover(
            function() {
                // 'this' refers to the hovered element
                $(this).css({
                    'background-color': '#7e6dea',
                    'color': 'white',
                    'transform': 'scale(1)'
                });

                $(this).find('.shipHeader').css('background-color', '#dfdafa');
                $(this).find('.arrowicon').css({
                    'background-color': 'white',
                    'color': '#7e6dea'
                });
            },
            function() {
                $(this).css({
                    'background-color': 'white',
                    'color': '#7e6dea',
                    'transform': 'scale(1)'
                });

                $(this).find('.shipHeader').css('background-color', '#7e6dea');
                $(this).find('.arrowicon').css({
                    'background-color': '#7e6dea',
                    'color': 'white'
                });
            }
        );
    </script>
@endpush
