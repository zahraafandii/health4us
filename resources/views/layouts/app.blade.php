<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA=Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:wght@300;400;500;700" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/style-beranda.css') }}">
    <link rel="stylesheet" href="{{ asset('style/auth/auth-base.css') }}">
    <link rel="stylesheet" href="{{ asset('style/auth/auth-masuk.css') }}">
    <link rel="stylesheet" href="{{ asset('style/auth/auth-daftar.css') }}">
    <link rel="stylesheet" href="{{ asset('style/auth/auth-lupa-sandi.css') }}">
    <link rel="stylesheet" href="{{ asset('style/auth/auth-buat-sandi.css') }}">
    
    <link rel="stylesheet" href="{{ asset('style/style-jelajahi.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style-aktivitas.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style-tantangan.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style-challenge-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style-custom.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style-umkm.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style-umkm-show.css') }}">
    <link rel="stylesheet" href="{{ asset('style/style-lengkapi-profil.css') }}">

    <title>@yield('title', 'Health4Us')</title>

    <style>
        @font-face {
            font-family: 'Inter-Bold-24';
            src: url('fonts/Inter/Inter_24pt-Bold.ttf');
        }

        @font-face {
            font-family: 'Inter-ExtraBold-28';
            src: url('fonts/Inter/Inter_28pt-ExtraBold.ttf');
        }

        @font-face {
            font-family: 'Inter-Regular';
            src: url('fonts/Inter/Inter_18pt-Regular.ttf');
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: #2A5568;
            font-family: 'Inter', sans-serif;
            /* background-color: #F5F0E1; */
            background: linear-gradient(#FFFCF5, #82BEAA);
        }

        main {
            flex: 1;
        }
        
        #navbarNav .navbar-nav:first-child { 
            gap: 20px;
            margin-left: 20px;
        }

        .navbar-light .navbar-nav .nav-link,
        .navbar-brand {
            color: #2A5568 !important;
            font-weight: 500;
            font-family: 'Inter-Bold-24';
        }

        .navbar-light .navbar-nav .nav-link:hover {
            color: #007bff !important;
            text-decoration: underline;
        }
        
        .nav-link.active {
            font-weight: bold;
            font-family: 'Inter-ExtraBold-28';
        }

        .dropdown-menu {
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand-img {
            height: 50px;
            width: auto;
        }

        .icon-btn {
            background-color: transparent;
            color: #555; /* Warna teks default, akan ditimpa oleh warna ikon */
            padding: 0.5rem 0.75rem;    border: 1px solid #2A5568; /* Border yang Anda inginkan */
            border-radius: 8px;
            transition: all 0.2s;
            margin-right: 5px;
        }

        .icon-btn:hover {
            background-color: #f0f0f0; 
            border-color: #2A5568;
        }

        .icon-btn i {
            font-size: 1.25rem; 
            color: #2A5568; 
            vertical-align: middle;
        }

        .badge-custom {
            height: 10px;
            width: 10px;
            top: 5px; 
            right: 0px; 
            border: 1px solid white; 
        }

        footer {
            background-image: linear-gradient(to bottom, #EFBF43 0%, #FFECBA 100%);        
            padding: 40px 0 20px 0;
            margin-top: auto;
        }

        footer h4 {
            font-family: 'Inter-ExtraBold-28';
            color: #2A5568;
            margin-bottom: 15px;
        }

        footer a {
            color: #2A5568;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            transition: color 0.2s;
        }

        footer a:hover {
            color: #007bff;
            text-decoration: underline;
        }

        .social-icon img {
            height: 32px;
            width: auto;
            margin-right: 15px;
            vertical-align: middle;
        }
    
        .social-icon {
            margin-right: 15px;
            display: inline-block; 
        }
    
        .social-icon:hover {
            color: #2A5568;
        }

        .footer-logo-img {
            height: 80px;
            width: auto;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    @if(!Route::is('masuk') && !Route::is('daftar') && !Route::is('lupa-sandi') && !Route::is('buat-sandi'))
        @include('includes.navbar')
    @endif

    <main>
        @yield('content')

        @if (session('success'))
            <div class="popup" id="successPopup">
                <div class="popup-box">
                    <p>{{ session('success') }}</p>
                    <button onclick="document.getElementById('successPopup').style.display='none'">OK</button>
                </div>
            </div>
        @endif
    </main>

    @if(!Route::is('masuk') && !Route::is('daftar') && !Route::is('lupa-sandi') && !Route::is('buat-sandi'))
        @include('includes.footer')
    @endif
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>

    @yield('scripts')
</body>
</html>


