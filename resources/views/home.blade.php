@extends('layouts.home')

@section('title', 'Sipos')

@section('content')
    <div id="content">
        <!-- Hero Section -->
        <section class="hero-section position-relative">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active">
                        <div class="hero-overlay"></div>
                        <img src="{{ asset('images/home-slider-1.png') }}" alt="slider-img" />
                        <div class="container">
                            <div class="hero-content">
                                <h2 class="hero-title">
                                    Aplikasi Point Of Sale Memudahkan Bisnis Anda
                                </h2>
                                <p class="hero-subtitle">
                                    Aplikasi kasir online dengan fitur lengkap yang cocok dan
                                    mudah digunakan oleh semua jenis usaha.
                                </p>
                                <div class="d-flex flex-column flex-md-row gap-3 mt-4">
                                    <a href="#" class="btn btn-primary rounded-pill px-5 py-2 fs-5 me-3">Lihat
                                        Demo</a>
                                    <a href="#" class="btn btn-outline-light rounded-pill px-5 py-2 fs-5">Whatsapp
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative">
                        <div class="hero-overlay"></div>
                        <img src="{{ asset('images/home-slider-2.png') }}" alt="slider-img" />
                        <div class="container">
                            <div class="hero-content">
                                <h2 class="hero-title">Mudah Berjualan Bisnismu Makin Cuan</h2>
                                <p class="hero-subtitle">
                                    Aplikasi Labba akan membantu mengelola bisnis jauh lebih mudah
                                    dan meningkatkan penjualanmu
                                </p>
                                <div class="d-flex flex-column flex-md-row gap-3 mt-4">
                                    <a href="#" class="btn btn-primary rounded-pill px-5 py-2 fs-5 me-3">Lihat
                                        Demo</a>
                                    <a href="#" class="btn btn-outline-light rounded-pill px-5 py-2 fs-5">Whatsapp
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative">
                        <div class="hero-overlay"></div>
                        <img src="{{ asset('images/home-slider-3.png') }}" alt="slider-img" />
                        <div class="container">
                            <div class="hero-content">
                                <h2 class="hero-title">Bisnis Tampil Beda Bersama Sipos</h2>
                                <p class="hero-subtitle">
                                    Tampil lebih modern dan profesional akan membuat pelanggan
                                    merasa puas atas layanan bisnismu
                                </p>
                                <div class="d-flex flex-column flex-md-row gap-3 mt-4">
                                    <a href="#" class="btn btn-primary rounded-pill px-5 py-2 fs-5 me-3">Lihat
                                        Demo</a>
                                    <a href="#" class="btn btn-outline-light rounded-pill px-5 py-2 fs-5">Whatsapp
                                        Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- Hero Section -->

        <!-- Section 1 -->
        <section class="section section-1">
            <div class="container">
                <div class="row align-items-center flex-column flex-md-row g-5">
                    <div class="col-md-6">
                        <div class="mb-3 position-relative">
                            <img id="thumbnail" src="{{ asset('images/thumb-video.png') }}" alt="Video Thumbnail"
                                class="img-fluid w-100 rounded-4" />
                            <div id="play" class="position-absolute top-50 start-50 translate-middle">
                                <img src="{{ asset('images/icons/play.svg') }}" alt="play" />
                            </div>
                        </div>
                        <video id="indexVideo" controls width="100%">
                            <source id="videoSource" src="{{ asset('video1.mp4') }}" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div class="col-md-5">
                        <div class="border-bottom border-black pb-3">
                            <h2 class="section-title mt-2">Aplikasi Bisnis Sipos</h2>
                            <p class="section-text">
                                Sipos adalah aplikasi kasir online yang memudahkan Transaksi
                                Penjualan dan Proses Operasional yang didesain untuk
                                mengembangkan bisnis Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section 1 -->

        <!-- Section 2 -->
        <section class="section bg-blue">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Pilihan Tepat Berbagai Bisnis</h2>
                    <p class="section-text">
                        Aplikasi Sipos dapat digunakan diberbagai jenis bisnis Anda
                    </p>
                </div>

                <div class="row bisnis-wrap g-3 gap-md-0">
                    <div class="col-md-6">
                        <div class="row d-flex flex-column justify-content-between gap-3">
                            <div class="col-12 position-relative">
                                <img src="{{ asset('images/retail.png') }}" alt="retail" />
                                <div class="bisnis-tag">
                                    <p>Toko Retail</p>
                                </div>
                            </div>
                            <div class="col-12 position-relative">
                                <img src="{{ asset('images/bisnis_jasa.png') }}" alt="bisnis" />
                                <div class="bisnis-tag">
                                    <p>Bisnis Jasa</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 position-relative">
                        <img src="{{ asset('images/fnb.png') }}" alt="fnb" class="h-100 rounded-5" />
                        <div class="bisnis-tag">
                            <p>Food & Beverages</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section 2 -->

        <!-- Section 3 -->
        <section class="section">
            <div class="container">
                <div class="row flex-column flex-md-row align-items-center gap-5">
                    <div class="col-md-6">
                        <h2 class="section-title mb-2">
                            Kelola pembayaran lebih Cepat, Praktis dan Akurat
                        </h2>
                        <p class="section-text">
                            Terima ragam pilihan metode pembayaran yang lebih cepat dan akurat
                            dengan adanya fitur pembayaran digital bisnis anda bisa terima
                            pembayaran melalui QRIS, E-Wallet dan Transfer antar bank.
                        </p>
                    </div>

                    <div class="col-md-5">
                        <img src="{{ asset('images/payment.png') }}" class="w-full" alt="payment" />
                    </div>
                </div>
            </div>
        </section>
        <!-- Section 3 -->

        <!-- Section 4 -->
        <section id="partners" class="section bg-blue">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-title">Teman Sipos</h2>
                    <p class="section-subtitle">
                        Mereka yang telah percaya menggunakan aplikasi Sipos
                    </p>
                </div>

                <div id="carouselPartners" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselPartners" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselPartners" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselPartners" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="partners-wrap">
                                <img src="{{ asset('images/bakso-terbang.png') }}" alt="bakso-terbang" />
                                <img src="{{ asset('images/winaz.png') }}" alt="winaz" />
                                <img src="{{ asset('images/winaz-coffee.png') }}" alt="winaz-coffee" />
                                <img src="{{ asset('images/wigs.png') }}" alt="wigs" />
                                <img src="{{ asset('images/teras-kota.png') }}" alt="teras-kota" />
                                <img src="{{ asset('images/car-wash.png') }}" alt="car-wash" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="partners-wrap">
                                <img src="{{ asset('images/bakso-terbang.png') }}" alt="bakso-terbang" />
                                <img src="{{ asset('images/winaz.png') }}" alt="winaz" />
                                <img src="{{ asset('images/winaz-coffee.png') }}" alt="winaz-coffee" />
                                <img src="{{ asset('images/wigs.png') }}" alt="wigs" />
                                <img src="{{ asset('images/teras-kota.png') }}" alt="teras-kota" />
                                <img src="{{ asset('images/car-wash.png') }}" alt="car-wash" />
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="partners-wrap">
                                <img src="{{ asset('images/bakso-terbang.png') }}" alt="bakso-terbang" />
                                <img src="{{ asset('images/winaz.png') }}" alt="winaz" />
                                <img src="{{ asset('images/winaz-coffee.png') }}" alt="winaz-coffee" />
                                <img src="{{ asset('images/wigs.png') }}" alt="wigs" />
                                <img src="{{ asset('images/teras-kota.png') }}" alt="teras-kota" />
                                <img src="{{ asset('images/car-wash.png') }}" alt="car-wash" />
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselPartners"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselPartners"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Section 4 -->
    </div>
@endsection
