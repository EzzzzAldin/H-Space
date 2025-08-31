<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {{-- <link rel="icon" href="assets/imgs/Ha Logo White.png" type="image/png" /> --}}
    <title>@yield('title', 'H-Space')</title>

    <title>@yield('title', config('app.name'))</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custome.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @stack('styles')
</head>

<body>
    <div id="app">
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>




    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll("section[id]");
            const navLinks = document.querySelectorAll(".side-contact-nav li a");

            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observerCallback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        navLinks.forEach(link => {
                            link.parentElement.classList.remove("active");
                        });

                        const currentId = entry.target.getAttribute("id");
                        const activeLink = document.querySelector(
                            `.side-contact-nav a[href="#${currentId}"]`);

                        if (activeLink) {
                            activeLink.parentElement.classList.add("active");
                        }
                    }
                });
            };

            const observer = new IntersectionObserver(observerCallback, options);

            sections.forEach(section => {
                observer.observe(section);
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.testimonials-slider', {
            loop: true,
            spaceBetween: 30,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                0: {
                    slidesPerView: 1,
                    spaceBetween: 20
                }
            }
        });
        
    </script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>
