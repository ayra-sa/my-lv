@extends('layouts.app')

@section('title', 'Fitur')

@section('content')
    @include('partials.hero', [
        'image' => 'images/home-slider-1.png',
        'title' => 'Kelola Penjualan Semakin Mudah dan Praktis',
        'subtitle' =>
            'Aplikasi Sipos akan membantu bisnismu mencapai potensi maksimalnya dengan berbagai fitur yang lengkap dan mudah digunakan.',
        'demoLink' => '#',
        'whatsappLink' => '#',
    ])

    <!-- Section Fitur -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Fitur Lengkap</h2>
                <p class="section-text">Fitur lengkap yang terintegrasi</p>
            </div>

            <div class="fitur-wrap">
                <img src="{{ asset('images/fitur.png') }}" alt="fitur" class="d-block d-md-none mb-5" />
                <div id="item-0">
                    <div class="feature-item feature-item-1">
                        <span>Kasir Online</span>
                        <ul>
                            <li>Penjualan Produk</li>
                            <li>Pembayaran Digital</li>
                            <li>Pengaturan Struk</li>
                        </ul>
                    </div>
                </div>
                <div id="item-1">
                    <div class="feature-item feature-item-2">
                        <span>Karyawan</span>
                        <ul>
                            <li>Manajemen Karyawan</li>
                            <li>Pengaturan Jadwal Kerja</li>
                            <li>Absen dan Izin Karyawan</li>
                        </ul>
                    </div>
                </div>
                <div id="item-2">
                    <div class="d-flex flex-column flex-md-row gap-4 w-full justify-content-evenly">
                        <div class="feature-item feature-item-3">
                            <span>Inventori</span>
                            <ul>
                                <li>Manajemen Supplier</li>
                                <li>Pembelian Stok Barang</li>
                                <li>Manajemen Stok Barang</li>
                            </ul>
                        </div>
                        <div class="feature-item feature-item-4">
                            <span>Produksi</span>
                            <ul>
                                <li>Manajemen Produsen</li>
                                <li>Produksi dan Pengirman</li>
                                <li>Mutasi Barang</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="item-3">
                    <div class="feature-item feature-item-5">
                        <span>Analisa Laba</span>
                        <ul>
                            <li>Analisa Penjualan</li>
                            <li>Analisa Konsumen</li>
                            <li>Analisa Promosi</li>
                        </ul>
                    </div>
                </div>
                <div id="item-4">
                    <div class="feature-item feature-item-6">
                        <span>Aplikasi Owner</span>
                        <ul>
                            <li>Monitoring Penjualan</li>
                            <li>Monitoring Karyawan</li>
                            <li>Monitoring Inventori</li>
                        </ul>
                    </div>
                </div>
                <div id="item-5" class="d-none d-md-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/fitur.png') }}" alt="fitur" />
                </div>
            </div>
        </div>
    </section>
    <!-- Section Fitur -->

    <!-- Section Solusi -->
    <section class="section bg-blue">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Fitur Solusi</h2>
                <p class="section-text">
                    Beragam Fitur menarik dapat menjadi Solusi untuk Bisnis Anda
                </p>
            </div>

            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <div class="solusi-item">
                        <span>Solusi Operasional</span>
                        <div class="row gap-4 align-items-center mb-2">
                            <div class="col-1">
                                <img src="{{ asset('images/icons/mp1.svg') }}" alt="icon" />
                            </div>
                            <div class="col-10">
                                <p>Manajemen Pesanan</p>
                            </div>
                        </div>
                        <div class="row gap-4 align-items-center mb-2">
                            <div class="col-1">
                                <img src="{{ asset('images/icons/people.svg') }}" alt="icon" />
                            </div>
                            <div class="col-10">
                                <p>Manajemen Pelanggan</p>
                            </div>
                        </div>
                        <div class="row gap-4 align-items-center">
                            <div class="col-1">
                                <img src="{{ asset('images/icons/receipt-item.svg') }}" alt="icon" />
                            </div>
                            <div class="col-10">
                                <p>Pembayaran Digital</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 col-md-6">
                    <div class="solusi-item">
                        <span>Solusi Administtratif</span>
                        <div class="row gap-4 align-items-center mb-2">
                            <div class="col-1">
                                <img src="assets/images/icons/clipboard.svg" alt="icon" />
                            </div>
                            <div class="col-10">
                                <p>Laporan Penjualan Produk</p>
                            </div>
                        </div>
                        <div class="row gap-4 align-items-center mb-2">
                            <div class="col-1">
                                <img src="assets/images/icons/notes.svg" alt="icon" />
                            </div>
                            <div class="col-10">
                                <p>Laporan Stok Barang</p>
                            </div>
                        </div>
                        <div class="row gap-4 align-items-center">
                            <div class="col-1">
                                <img src="assets/images/icons/clipboard.svg" alt="icon" />
                            </div>
                            <div class="col-10">
                                <p>Laporan Pembelian Barang</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="solusi-item">
                        <span>Solusi Pengelolaan</span>
                        <div class="row gap-4 align-items-center mb-2">
                            <div class="col-1">
                                <img src="assets/images/icons/shop.svg" alt="icon" />
                            </div>
                            <div class="col-10">
                                <p>Manajemen Outlet</p>
                            </div>
                        </div>
                        <div class="row gap-4 align-items-center mb-2">
                            <div class="col-1">
                                <img src="assets/images/icons/user-octagon.svg" alt="icon" />
                            </div>
                            <div class="col-10">
                                <p>Manajemen Karyawan</p>
                            </div>
                        </div>
                        <div class="row gap-4 align-items-center">
                            <div class="col-1">
                                <img src="assets/images/icons/box.svg" alt="icon" />
                            </div>
                            <div class="col-10">
                                <p>Pembayaran Stok Barang</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="solusi-item">
                        <span>Solusi Pengembangan</span>
                        <div class="row gap-4 align-items-center mb-2">
                            <div class="col-1">
                                <img src="assets/images/icons/dashboard.svg" alt="icon" />
                            </div>
                            <div class="col-10">
                                <p>Dashboard</p>
                            </div>
                        </div>
                        <div class="row gap-4 align-items-center mb-2">
                            <div class="col-1">
                                <img src="assets/images/icons/status-up.svg" alt="icon" />
                            </div>
                            <div class="col-10">
                                <p>Analisa Penjualan Produk</p>
                            </div>
                        </div>
                        <div class="row gap-4 align-items-center">
                            <div class="col-1">
                                <img src="assets/images/icons/discount-shape.svg" alt="icon" />
                            </div>
                            <div class="col-10">
                                <p>Manajemen Promosi</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Section Solusi -->

    <!-- Section Multi App -->
    <section class="section" id="multi">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Multi Aplikasi</h2>
                <p class="section-text">
                    Beragam Aplikasi menjadi kemudahan untuk semua akses labba
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4 d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('images/multi-app1.png') }}" class="mx-auto" alt="multi aplikasi" />
                    <h3 class="fs-4 mt-3 text-center mb-4">Sipos</h3>
                    <p>
                        Aplikasi Kasir Online untuk mengatur penjualan dan pembayaran
                        transaksi bisnis anda.
                    </p>
                </div>
                {{-- <div class="col-md-4 d-flex flex-column align-items-center text-center">
                    <img src="assets/images/multi-app2.png" class="mx-auto" alt="multi aplikasi" />
                    <h3 class="fs-4 mt-3 text-center mb-4">Sipos Teams</h3>
                    <p>
                        Aplikasi SDM untuk mengelola karyawan agar operasional bisnis anda
                        berjalan dengan baik.
                    </p>
                </div>
                <div class="col-md-4 d-flex flex-column align-items-center text-center">
                    <img src="assets/images/multi-app3.png" class="mx-auto" alt="multi aplikasi" />
                    <h3 class="fs-4 mt-3 text-center mb-4">Sipos Owner</h3>
                    <p>
                        Aplikasi Owner untuk memonitor aktifitas bisnis anda secara
                        praktis, mudah dan realtime.
                    </p>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Section Multi App -->
@endsection
