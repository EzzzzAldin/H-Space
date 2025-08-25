<section class="hero position-relative">
    {{-- Background Video --}}
    <video autoplay muted loop playsinline class="position-absolute w-100 h-100 object-fit-cover" style="z-index: -1;">
        <source src="{{ asset('assets/videos/freepik__create-a-cinematic-scifi-video-scene-of-an-astrona__45696.mp4') }}"
            type="video/mp4">
        Your browser does not support the video tag.
    </video>

    {{-- Overlay (اختياري عشان توضح العناصر فوق الفيديو) --}}
    {{-- <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.4); z-index:-1;"></div> --}}

    {{-- Content --}}
    <div class="container text-center text-white d-flex flex-column justify-content-center align-items-center"
        style="height:100vh;">
        <h1 class="display-3 fw-bold">Welcome to H-Space</h1>
        <p class="lead">Innovating the digital future</p>
        <a href="#services" class="btn btn-primary btn-lg mt-3">Get Started</a>
    </div>
</section>
