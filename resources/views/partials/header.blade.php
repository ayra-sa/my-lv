<header>
    <nav class="navbar navbar-expand-lg position-absolute z-3">
      <div class="container">
        <div class="nav-wrap">
          <!-- Logo -->
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" />
          </a>
  
          <div class="d-flex d-md flex-row-reverse flex-md-row">
            <!-- Navbar Toggler -->
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <!-- Offcanvas Content -->
            <div
              class="offcanvas offcanvas-end"
              tabindex="-1"
              id="offcanvasNavbar"
              aria-labelledby="offcanvasNavbarLabel"
            >
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body">
                <!-- Navbar links inside Offcanvas -->
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                      <a class="nav-link {{ request()->routeIs('fitur') ? 'active' : '' }}" href="{{ route('fitur') }}" data-link="{{ route('fitur') }}">
                          Fitur Aplikasi
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->routeIs('hardware') ? 'active' : '' }}" href="{{ route('hardware') }}" data-link="{{ route('hardware') }}">
                          Perangkat
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ request()->routeIs('harga') ? 'active' : '' }}" href="{{ route('harga') }}" data-link="{{ route('harga') }}">
                          Harga
                      </a>
                  </li>
                  <!-- Dropdown menu for Support -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle {{ (request()->routeIs('panduan') || request()->routeIs('faq')) ? 'active' : '' }}" 
                         href="#" id="supportDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Support
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="supportDropdown">
                          <li>
                              <a class="dropdown-item {{ request()->routeIs('panduan') ? 'active' : '' }}" href="{{ route('panduan') }}">
                                  Panduan
                              </a>
                          </li>
                          <li>
                              <a class="dropdown-item {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">
                                  FAQ
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>       
  
                <!-- Login & Register buttons -->
                <div class="d-flex flex-column gap-2 flex-md-row align-items-start align-items-md-center">
                  <a href="{{ url('login') }}" class="login px-4">Masuk</a>
                  <a href="{{ url('register') }}" class="btn btn-primary rounded-pill px-4">Coba Gratis</a>
                </div>
              </div>
            </div>
  
            <!-- Language Dropdown -->
            <select class="" name="lang" id="lang">
              <option value="id">ID</option>
              <option value="en">EN</option>
            </select>
          </div>
        </div>
      </div>
    </nav>
  </header>
  