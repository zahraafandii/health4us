<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container-fluid" style="padding-left: 20px; padding-right: 20px;">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('asset/logo.png') }}" alt="Logo Health4Us" class="navbar-brand-img">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav"> 
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('aktivitas') ? 'active' : '' }}" href="/aktivitas">Aktivitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('tantangan') ? 'active' : '' }}" href="/tantangan">Tantangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('partner-umkm') ? 'active' : '' }}" href="/partner-umkm">Partner UMKM</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex flex-row align-items-center">
                <li class="nav-item me-2">
                    <button class="btn icon-btn" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="fas fa-search fa-lg"></i>
                    </button>
                </li>
                
                <li class="nav-item me-2">
                    <button class="btn icon-btn position-relative" type="button" data-bs-toggle="offcanvas" data-bs-target="#notificationOffcanvas" aria-controls="notificationOffcanvas">
                        <i class="fas fa-bell fa-lg"></i> {{-- Tambahkan fa-lg agar ukurannya seragam --}}
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            2
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </button>
                </li>

                <li class="nav-item dropdown">
                    @if (Auth::check())
                        <a class="btn icon-btn" href="#" id="navbarDropdownProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle fa-lg"></i>
                        </a>
                        
                        <ul class="dropdown-menu dropdown-menu-end mt-4" aria-labelledby="navbarDropdownProfile">
                            <li><a class="dropdown-item" href="{{ route('lengkapi-profil') }}">Lengkapi Profil</a></li> 
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" 
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <strong>Keluar</strong>
                                </a>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <a class="btn icon-btn" href="#" id="navbarDropdownAuth" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle fa-lg"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-4" aria-labelledby="navbarDropdownAuth">
                            <li><a class="dropdown-item" href="{{ route('daftar') }}">Daftar</a></li>
                            <li><a class="dropdown-item" href="{{ route('masuk') }}">Masuk</a></li>
                        </ul>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 pb-3">
                <h5 class="modal-title" id="searchModalLabel">Cari Sesuatu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <form action="/" method="GET">
                    <input type="search" class="form-control" placeholder="Ketik kata kunci">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="notificationOffcanvas" aria-labelledby="notificationOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="notificationOffcanvasLabel"><i class="fas fa-bell me-2"></i> Notifikasi Terbaru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="list-group">
            <a href="/" class="list-group-item list-group-item-action d-flex align-items-center mb-2" aria-current="true">
                <div class="flex-grow-1">
                    <div class="fw-bold">Promo Terbaru!</div>
                    Dapatkan diskon 20% untuk semua produk Fashion.
                </div>
                <span class="badge bg-primary rounded-pill ms-2">Baru</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action mb-2">
                <div class="fw-bold">Aktivitas Baru</div>
                Tantangan "Lari 5K" dimulai besok!
            </a>
            <a href="#" class="list-group-item list-group-item-action text-center text-primary">
                Lahat Semua Notifikasi
            </a>
        </div>
    </div>
</div>

