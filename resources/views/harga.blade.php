@extends('layouts.app')

@section('title', 'Harga')

@section('content')
    @include('partials.hero', [
        'image' => 'images/home-slider-1.png',
        'title' => 'Perangkat Mesin Kasir untuk Bisnis Anda',
        'subtitle' =>
            'Perlengkapan penunjang untuk memudahkan segala urusan Transaksi dan Operasional bisnis anda',
        'demoLink' => '#',
        'whatsappLink' => '#',
    ])

    <section class="section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Harga Aplikasi Sipos</h2>
                <p class="section-text">
                    Lengkap, Murah dan Terjangkau untuk semua bisnis anda
                </p>
            </div>

            <div class="row row-gap-4 mb-5">
                @foreach ($pricingPlans as $plan)
                    <div class="col-12 col-md-3">
                        <div class="harga-card {{ strtolower($plan['title']) }}">
                            <div class="harga-card-title d-flex align-items-center justify-content-between row-gap-4">
                                <h3>{{ $plan['title'] }}</h3>
                                @if (!empty($plan['bestSeller']))
                                    <span class="best">Best Seller</span>
                                @endif
                            </div>
    
                            <div class="harga-card-body">
                                <div class="harga">
                                    <b>{{ $plan['price'] }}</b>
                                    <p>{{ $plan['frequency'] ?? '' }}</p>
                                </div>
    
                                <ul>
                                    @foreach ($plan['features'] as $feature)
                                        <li>
                                            <p>{{ $feature }}</p>
                                        </li>
                                    @endforeach
                                </ul>
    
                                <div class="d-flex flex-column gap-2 mt-auto">
                                    @if ($plan['title'] === 'Basic')
                                        <a href="#" class="btn btn-outline-primary">Coba Gratis 14 Hari</a>
                                        <a href="#" class="btn btn-primary">Beli Paket</a>
                                    @elseif ($plan['title'] === 'Advance')
                                        <a href="#" class="btn btn-primary w-full">Beli Paket</a>
                                    @elseif ($plan['title'] === 'Pro')
                                        <a href="#" class="btn btn-primary w-full">Pilih Paket</a>
                                    @elseif ($plan['title'] === 'Enterprise')
                                        <a href="#" class="btn w-full">Hubungi Kami</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <p class="fw-medium">
                <span class="text-danger">*</span>Harga belum termasuk PPn
            </p>
        </div>
    </section>

    <!-- Section Fitur -->
    <section id="someFitur" class="bg-blue">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Ditambah Banyak Fitur Handal</h2>
            </div>

            <div class="row row-gap-3 somefitur-wrap">
                <div class="col">
                    <div class="row bg-white py-3 px-2 gap-3 gap-md-2 rounded-4 somefitur-card">
                        <div class="col-2">
                            <img src="{{ asset('images/icons/status-up.svg') }}" alt="icon" class="w-full" />
                        </div>
                        <div class="col-9">
                            <b>Dashboard dan Laporan Realtime</b>
                            <p class="mt-2">
                                Berbagai fitur yang lengkap mempermudah bisnis anda mencapai
                                potensi maksimalnya. Pantau dan terima laporan operasional
                                bisnis anda dalam satu akses.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row bg-white py-3 px-2 gap-3 gap-md-2 rounded-4 somefitur-card">
                        <div class="col-2">
                            <img src="{{ asset('images/icons/payment.svg') }}" alt="icon" class="w-full" />
                        </div>
                        <div class="col-9">
                            <b>Terima Pembayaran Instan</b>
                            <p class="mt-2">
                                Labba menyediakan banyak pilihan pembayaran untuk segala
                                kebutuhan berjualan, mulai dari tunai, qris statis, qris
                                dinamis, edc, e-wallet dan transfer bank.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col">
                    <div class="row bg-white py-3 px-2 gap-3 gap-md-2 rounded-4 somefitur-card">
                        <div class="col-2">
                            <img src="assets/images/icons/boxes.svg" alt="icon" class="w-full" />
                        </div>
                        <div class="col-9">
                            <b>Multiple Outlet</b>
                            <p class="mt-2">
                                Mendukung multi outlet yang akan mempermudah proses
                                pengelolaan data outlet hanya dalam satu akses. Tidak perlu
                                lagi cara manual yang merepotkan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row bg-white py-3 px-2 gap-3 gap-md-2 rounded-4 somefitur-card">
                        <div class="col-2">
                            <img src="assets/images/icons/cube.svg" alt="icon" class="w-full" />
                        </div>
                        <div class="col-9">
                            <b>Inventori Multiple Warehouse</b>
                            <p class="mt-2">
                                Mendukung multi warehouse dengan inventorisasi yang benar
                                per-warehouse dan per-outlet. Semua data tersinkronisasi
                                dengan baik.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row bg-white py-3 px-2 gap-3 gap-md-2 rounded-4 somefitur-card">
                        <div class="col-2">
                            <img src="assets/images/icons/dashboard.svg" alt="icon" class="w-full" />
                        </div>
                        <div class="col-9">
                            <b>Aplikasi Yang Friendly</b>
                            <p class="mt-2">
                                Dibuat dengan teknologi web dan aplikasi tercanggih dengan
                                mengedepankan desain user interface dan experience yang
                                memudahkan pengguna.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row bg-white py-3 px-2 gap-3 gap-md-2 rounded-4 somefitur-card">
                        <div class="col-2">
                            <img src="assets/images/icons/phone-shield.svg" alt="icon" class="w-full" />
                        </div>
                        <div class="col-9">
                            <b>Standar Keamanan Yang Ketat</b>
                            <p class="mt-2">
                                Dirancang dengan standar sekuritas terbaik, Aplikasi Labba
                                dilindungi dengan sistem keamanan terbaik yang melindungi
                                semua informasi dan data bisnis anda.
                            </p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Section Fitur -->
@endsection
