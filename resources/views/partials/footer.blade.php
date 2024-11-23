<!-- Footer -->
<footer>
    <!-- Floating -->
    <div id="float">
      <div class="container">
        <div class="floating bg-floating shadow">
          <div>
            <p>Maksimalkan Bisnismu, Pakai Sipos Sekarang!</p>
            <p>Harga mulai dari Rp 150,000 / Bulan</p>
  
            <div class="d-flex flex-column flex-md-row align-items-md-center gap-3 mt-5">
              <a href="#" class="btn btn-primary rounded-pill fs-5 px-4 py-2">Beli Paket Sekarang</a>
              <a href="#" class="btn btn-outline-light rounded-pill fs-5 px-4 py-2">Konsultasi Kebutuhan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Floating -->
  
    <div class="footer-content">
      <div class="container">
        <div class="row g-5">
          <div class="col-md-3">
            <a href="{{ url('/') }}">
              <p class="fst-italic mb-0">Aplikasi Point Of Sales</p>
              <img src="{{ asset('images/logo.png') }}" alt="logo" />
            </a>
            <p class="mt-4">
              Aplikasi kasir online terbaik dan terlengkap untuk semua jenis usaha naikin laba.
            </p>
  
            <div class="contact mt-4">
              <h2 class="fs-5">Head Office</h2>
              <p>Jl. Diponegoro 240</p>
              <p>Tambun, Bekasi, Jawa Barat 17510</p>
            </div>
            <div class="contact mt-4">
              <h2 class="fs-5">Labba Care</h2>
              <p>021-12344567</p>
            </div>
          </div>
          <div class="col-md-3">
            <p class="fw-semibold mb-5 fs-6">Layanan</p>
            <ul class="d-flex flex-column gap-4 fw-medium">
              <li><a href="{{ url('point-of-sales') }}">Point Of Sale</a></li>
              <li><a href="#">Cashless Payment</a></li>
              <li><a href="#">Manajemen Karyawan</a></li>
              <li><a href="#">Manajemen Pelanggan</a></li>
              <li><a href="#">Manajemen Inventori</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <p class="fw-semibold mb-5 fs-6">Solusi Bisnis</p>
            <ul class="d-flex flex-column gap-4 fw-medium">
              <li><a href="{{ url('toko-retail') }}">Toko Retail</a></li>
              <li><a href="#">Food & Beverage</a></li>
              <li><a href="#">Jasa Laundry</a></li>
              <li><a href="#">Barbershop</a></li>
              <li><a href="#">Carwash & Showroom</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <p class="fw-semibold mb-5 fs-6">Harga</p>
            <ul class="d-flex flex-column gap-4 fw-medium">
              <li><a href="{{ url('paket-basic') }}">Paket Basic</a></li>
              <li><a href="#">Paket Advance</a></li>
              <li><a href="#">Paket Professional</a></li>
              <li><a href="#">Paket Enterprise</a></li>
            </ul>
          </div>
        </div>
  
        <div class="border-top border-bottom border-white py-3 mt-5 d-flex flex-column flex-md-row align-items-md-center justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <a href="#">
              <img src="{{ asset('images/googleplay-download.png') }}" alt="googleplay-download" />
            </a>
            <a href="#">
              <img src="{{ asset('images/appstore-download.png') }}" alt="appstore-download" />
            </a>
          </div>
  
          <div class="d-flex align-items-center gap-3">
            <a href="#">
              <img src="{{ asset('images/mail.png') }}" alt="mail" />
            </a>
          </div>
        </div>
  
        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-center mt-4">
          <p class="fw-semibold">2024 PT. NPI Indonesia. All Right Reserved</p>
          <div class="d-flex align-items-center gap-3 justify-content-center">
            <a href="{{ url('syarat-ketentuan') }}">Syarat dan Ketentuan</a>
            <a href="{{ url('kebijakan-privasi') }}">Kebijakan Privasi</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer -->
  