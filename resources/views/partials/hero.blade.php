<!-- Hero Section -->
<section class="hero-section position-relative">
    <div class="position-relative">
        <div class="hero-overlay"></div>
        <img src="{{ asset($image) }}" class="img-fluid" alt="slider-img" />
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">
                    {{ $title }}
                </h2>
                <p class="hero-subtitle">
                    {{ $subtitle }}
                </p>
                <div class="d-flex flex-column flex-md-row gap-3 mt-4">
                    <a href="{{ $demoLink }}" class="btn btn-primary rounded-pill px-5 py-2 fs-5 me-3">Lihat Demo</a>
                    <a href="{{ $whatsappLink }}" class="btn btn-outline-light rounded-pill px-5 py-2 fs-5">Whatsapp Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section -->
