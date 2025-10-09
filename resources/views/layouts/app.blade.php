<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KLUG - Konsultan Pendidikan Luar Negeri')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-purple: #46074E; 
            --primary-blue: #197BD0;
            --gradient-start: #46074E;
            --gradient-end: #197BD0 80% ;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif, ubuntu;
            overflow-x: hidden;
        }

        /* Navbar Styling */
        .navbar-custom {
            background: linear-gradient(90deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 1366px;
            height: 80px;
        }

        .navbar-brand {
            color: white !important;
            font-size: 2rem;
            width: 77px;
            height: 40px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .navbar-nav .nav-link {
            color: rgba(255,255,255,0.9) !important;
            margin: 0 1rem;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: white !important;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }

        .search-box {
            position: relative;
            margin-right: 1rem;
        }

        .search-box input {
            background: rgba(255,255,255,0.2);
            border: 1px solid rgba(255,255,255,0.3);
            color: white;
            padding: 0.5rem 2.5rem 0.5rem 1rem;
            border-radius: 25px;
            width: 250px;
        }

        .search-box input::placeholder {
            color: rgba(255,255,255,0.7);
        }

        .search-box i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255,255,255,0.7);
        }

        .btn-register {
            background: #195395;
            color: var(--primary-purple);
            padding: 0.5rem 2rem;
            border-radius: 25px;
            font-weight: 600;
            border: none;
            transition: all 0.3s;
        }

        .btn-register:hover {
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            height: 550px;
            overflow: hidden;
        }

        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(70%);
        }

        /* Overlay transparan biru keunguan */
        .hero-overlay {
            position: absolute;
            width: 621px;
            height: 120px;
            bottom: 80px;
            left: 120px;
            right: 120px;
            background: linear-gradient(90deg, rgba(70,7,78,0.9) 0%, rgba(25,123,208,0.9) 100%);
            border-radius: 6px;
            padding: 2rem 3rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 10px 10px 4px 0px rgba(0, 0, 0, 0.2);
        }

        /* Teks besar putih */
        .hero-text {
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 1px;
            margin: 0;
            line-height: 1.4;
        }

        /* Tombol putih transparan */
        .btn-details {
            background: transparent;
            border: 2px solid #fff;
            color: #fff;
            padding: 0.8rem 2.5rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .btn-details:hover {
            background: #fff;
            color: var(--primary-purple);
            transform: scale(1.05);
        }

        /* Responsif (mobile) */
        @media (max-width: 768px) {
            .hero-section {
                height: 450px;
            }

            .hero-overlay {
                flex-direction: column;
                text-align: center;
                left: 20px;
                right: 20px;
                bottom: 40px;
                padding: 1.5rem;
            }

            .hero-text {
                font-size: 1.5rem;
                margin-bottom: 1.5rem;
            }

            .btn-details {
                padding: 0.8rem 2rem;
                font-size: 1rem;
            }
        }

        .btn-details:hover {
            background: white;
            color: var(--primary-purple);
        }

        /* Section Styling */
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            margin: 4rem 0 3rem;
            color: var(--primary-purple);
        }

        /* About Section */
        .about-section {
            padding: 4rem 2rem;
            background: #f8f9fa;
        }

        .about-content {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        /* Services Section */
        .services-section {
            padding: 4rem 2rem;
        }

        .service-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            margin-bottom: 2rem;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .service-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .service-card-body {
            padding: 1.5rem;
            text-align: center;
        }

        .service-card h5 {
            color: var(--primary-purple);
            font-weight: bold;
            margin-bottom: 1rem;
        }

        /* Partners Section */
        .partners-section {
            padding: 4rem 2rem;
            background: #f8f9fa;
        }

        .partner-logo {
            width: 200px;
            height: 120px;
            object-fit: contain;
            margin: 1rem;
            filter: grayscale(100%);
            transition: filter 0.3s;
        }

        .partner-logo:hover {
            filter: grayscale(0%);
        }

        /* Free Consultation Section */
        .consultation-section {
            padding: 4rem 2rem;
            background: linear-gradient(135deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
        }

        .consultation-box {
            background: white;
            border-radius: 20px;
            padding: 3rem;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .consultation-box h3 {
            color: var(--primary-purple);
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }

        .btn-consultation {
            background: var(--primary-purple);
            color: white;
            padding: 1rem 3rem;
            border-radius: 50px;
            border: none;
            font-size: 1.1rem;
            transition: all 0.3s;
        }

        .btn-consultation:hover {
            background: var(--primary-blue);
            transform: scale(1.05);
        }

        /* Contact Section */
        .contact-section {
            padding: 4rem 2rem;
        }

        .contact-info {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 2rem;
        }

        .contact-info h4 {
            color: var(--primary-purple);
            margin-bottom: 1.5rem;
        }

        .contact-item {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .contact-item i {
            color: var(--primary-purple);
            margin-right: 1rem;
            font-size: 1.2rem;
        }

        .map-container {
            border-radius: 15px;
            overflow: hidden;
            height: 400px;
            margin-bottom: 2rem;
        }

        .message-form {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .form-control {
            border-radius: 10px;
            padding: 0.8rem;
            margin-bottom: 1rem;
        }

        .btn-send {
            background: var(--primary-purple);
            color: white;
            padding: 0.8rem 3rem;
            border-radius: 50px;
            border: none;
            width: 100%;
            transition: all 0.3s;
        }

        .btn-send:hover {
            background: var(--primary-blue);
        }

        /* Footer */
        .footer {
            background: linear-gradient(90deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        @media (max-width: 768px) {
            .hero-overlay {
                flex-direction: column;
                text-align: center;
            }

            .hero-text {
                font-size: 1.5rem;
                margin-bottom: 2rem;
            }

            .search-box input {
                width: 150px;
            }
        }

        /* --- NAVBAR SHRINK ON SCROLL --- */
        .navbar-custom.shrink {
            background: rgba(59, 59, 152, 0.9);
            padding: 0.4rem 1rem;
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);
            backdrop-filter: blur(6px);
            transition: all 0.4s ease;
        }

    </style>
    @yield('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">klug</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Layanan Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('articles') ? 'active' : '' }}" href="{{ route('articles') }}">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Hubungi Kami</a>
                    </li>
                </ul>
                <form action="{{ route('search') }}" method="GET" class="d-flex align-items-center">
                    <div class="search-box">
                        <input type="text" name="q" class="form-control" placeholder="Ketik pencarian">
                        <i class="fas fa-search"></i>
                    </div>
                    <a href="{{ route('register') }}" class="btn btn-register">DAFTAR ON-LINE</a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="mb-0">&copy; {{ date('Y') 
                }} KLUG - Konsultan Pendidikan Luar Negeri. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Efek navbar mengecil & transparan saat di-scroll
    window.addEventListener("scroll", function() {
        const navbar = document.querySelector(".navbar-custom");
        if (window.scrollY > 60) {
            navbar.classList.add("shrink");
        } else {
            navbar.classList.remove("shrink");
        }
        });
    </script>

    @yield('scripts')
</body>
</html>