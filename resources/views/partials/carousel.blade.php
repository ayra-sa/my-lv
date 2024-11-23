<section class="hero-section position-relative">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            @foreach ($sliders as $index => $slider)
                <div class="carousel-item position-relative {{ $index === 0 ? 'active' : '' }}">
                    <div class="hero-overlay"></div>
                    <img src="{{ asset($slider->image) }}" alt="slider-img" />
                    <div class="container">
                        <div class="hero-content">
                            <h2 class="hero-title">{{ $slider->title }}</h2>
                            <p class="hero-subtitle">{{ $slider->subtitle }}</p>
                            <div class="d-flex flex-column flex-md-row gap-3 mt-4">
                                @if($slider->button_text && $slider->button_link)
                                    <a href="{{ $slider->button_link }}" class="btn btn-primary rounded-pill px-5 py-2 fs-5 me-3">
                                        {{ $slider->button_text }}
                                    </a>
                                @endif
                                <a href="#" class="btn btn-outline-light rounded-pill px-5 py-2 fs-5">Whatsapp Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <i class="bi bi-chevron-left btn-navigate" aria-hidden="true"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <i class="bi bi-chevron-right btn-navigate" aria-hidden="true"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
