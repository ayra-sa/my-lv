@extends('layouts.app')

@section('title', 'Panduan')

@section('content')
    @include('partials.hero', [
        'image' => 'images/home-slider-1.png',
        'title' => 'Perangkat Mesin Kasir untuk Bisnis Anda',
        'subtitle' =>
            'Perlengkapan penunjang untuk memudahkan segala urusan Transaksi dan Operasional bisnis anda',
        'demoLink' => '#',
        'whatsappLink' => '#',
    ])

    <!-- Section Panduan -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Panduan Aplikasi Sipos</h2>
                <p class="section-text">
                    Aplikasi labba mudah digunakan, simak untuk panduan penggunaan
                </p>
            </div>

            <div class="row g-4" id="news-cards">
                <!-- Loop through the news items -->
                @foreach ($news as $index => $newsItem)
                    <div class="col-12 col-md-4 {{ $index >= 3 ? 'd-none' : '' }}">
                        <div class="card">
                            <img src="{{ $newsItem->image_url }}" alt="news image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $newsItem->title }}</h5>
                                <p class="card-text">{{ $newsItem->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- <div class="row g-4">
                <div class="col-12 col-md-4">
                    <div class="panduan-card">
                        <img src="{{ asset('images/card-img.png') }}" alt="card image" class="w-full" />

                        <div class="panduan-card-body">
                            <p>Panduan Penggunaan</p>
                            <h3>Cara mendapatkan dan memasang aplikasi Sipos bisnis</h3>

                            <div class="d-flex align-items-center gap-3 mb-4">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('images/icons/admin.svg') }}" alt="admin" />
                                    <span>Admin</span>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{ asset('images/icons/time.svg') }}" alt="time" />
                                    <span>3 min</span>
                                </div>
                            </div>
                            <p>
                                Berikut ini adalah beberapa langkah yang bisa Anda ikuti untuk
                                melakukan instalasi aplikasi labba...
                            </p>
                        </div>
                    </div>
                </div>
            </div> --}}

            <button id="see-more-btn" class="d-flex mx-auto mt-5 gap-3 align-items-center justify-content-center btn fs-5">
                <span>Lihat lebih banyak</span>
                <img src="{{ asset('images/icons/down.svg') }}" alt="down" />
            </button>
        </div>
    </section>
    <!-- Section Panduan -->

    <!-- Section Video -->
    <section id="video">
        <div class="container">
            <h3 class="fs-5">Tonton video tutorial</h3>

            <div class="row mt-4 g-4">
                <!-- Bagian Kiri: Video Player dan Deskripsi -->
                <div class="col-md-7">
                    <div class="mb-3">
                        <div class="mb-3 position-relative">
                            <img id="videoThumbnail" src="{{ asset('images/thumb-video.png') }}" alt="Video Thumbnail"
                                class="img-fluid w-100 rounded-4" />
                            <div id="playButton" class="position-absolute top-50 start-50 translate-middle">
                                <img src="{{ asset('images/icons/play.svg') }}" alt="play" />
                            </div>
                        </div>
                        <video id="mainVideo" controls width="100%">
                            <source id="videoSource" src="video1.mp4" type="video/mp4" />
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div>
                        <h5 id="videoTitle">
                            Cara mendapatkan dan memasang aplikasi Sipos bisnis
                        </h5>
                        <p>25 Oktober 2024</p>
                        <p class="truncate-multiline">
                            Video berikut akan membantu Anda untuk melakukan instalasi
                            aplikasi labba, Berikut adalah langkah-langkahnya: 1. Masuk ke web labba 2. Pilih play store
                            jika anda menggunakan perangkat Android 3. Pilih menu apple store jika anda menggunakan
                            perangkat iOS 4
                        </p>
                    </div>
                </div>

                <!-- Bagian Kanan: List Video -->
                <div class="col-md-5">
                    <ul class="d-flex flex-column gap-3">
                        <li class="video-item" data-title="Cara mendapatkan dan memasang aplikasi Sipos bisnis"
                            data-desc="Video berikut akan membantu Anda untuk melakukan instalasi aplikasi labba, Berikut adalah langkah-langkahnya: 1. Masuk ke web labba 2. Pilih play store jika anda menggunakan perangkat Android 3. Pilih menu apple store jika anda menggunakan perangkat iOS 4......."
                            data-src="video1.mp4">
                            <div class="row g-4">
                                <div class="col-3 col-md-4">
                                    <img src="{{ asset('images/thumb-video.png') }}" alt="Thumbnail 1"
                                        class="rounded-2 me-2 img-fluid" />
                                </div>
                                <div class="col-9 col-md-8">
                                    <p class="mb-3 fw-medium">
                                        Cara mendapatkan dan memasang aplikasi Sipos bisnis
                                    </p>
                                    <p>25 Oktober 2024</p>
                                </div>
                            </div>
                        </li>
                        <li class="video-item" data-title="Cara mendapatkan dan memasang aplikasi Sipos bisnis"
                            data-desc="Video berikut akan membantu Anda untuk melakukan instalasi aplikasi labba, Berikut adalah langkah-langkahnya: 1. Masuk ke web labba 2. Pilih play store jika anda menggunakan perangkat Android 3. Pilih menu apple store jika anda menggunakan perangkat iOS 4......."
                            data-src="videos/video2.mp4">
                            <div class="row g-4">
                                <div class="col-3 col-md-4">
                                    <img src="{{ asset('images/thumb-video.png') }}" alt="Thumbnail 1"
                                        class="rounded-2 me-2 img-fluid" />
                                </div>
                                <div class="col-9 col-md-8">
                                    <p class="mb-3 fw-medium">
                                        Cara mendapatkan dan memasang aplikasi Sipos bisnis
                                    </p>
                                    <p>25 Oktober 2024</p>
                                </div>
                            </div>
                        </li>
                        <li class="video-item" data-title="Cara mendapatkan dan memasang aplikasi Sipos bisnis"
                            data-desc="Video berikut akan membantu Anda untuk melakukan instalasi aplikasi labba, Berikut adalah langkah-langkahnya: 1. Masuk ke web labba 2. Pilih play store jika anda menggunakan perangkat Android 3. Pilih menu apple store jika anda menggunakan perangkat iOS 4......."
                            data-src="videos/video3.mp4">
                            <div class="row g-4">
                                <div class="col-3 col-md-4">
                                    <img src="{{ asset('images/thumb-video.png') }}" alt="Thumbnail 1"
                                        class="rounded-2 me-2 img-fluid" />
                                </div>
                                <div class="col-9 col-md-8">
                                    <p class="mb-3 fw-medium">
                                        Cara mendapatkan dan memasang aplikasi Sipos bisnis
                                    </p>
                                    <p>25 Oktober 2024</p>
                                </div>
                            </div>
                        </li>
                        <li class="video-item" data-title="Cara mendapatkan dan memasang aplikasi Sipos bisnis"
                            data-desc="Video berikut akan membantu Anda untuk melakukan instalasi aplikasi labba, Berikut adalah langkah-langkahnya: 1. Masuk ke web labba 2. Pilih play store jika anda menggunakan perangkat Android 3. Pilih menu apple store jika anda menggunakan perangkat iOS 4......."
                            data-src="videos/video4.mp4">
                            <div class="row g-4">
                                <div class="col-3 col-md-4">
                                    <img src="{{ asset('images/thumb-video.png') }}" alt="Thumbnail 1"
                                        class="rounded-2 me-2 img-fluid" />
                                </div>
                                <div class="col-9 col-md-8">
                                    <p class="mb-3 fw-medium">
                                        Cara mendapatkan dan memasang aplikasi Sipos bisnis
                                    </p>
                                    <p>25 Oktober 2024</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Video -->
@endsection
