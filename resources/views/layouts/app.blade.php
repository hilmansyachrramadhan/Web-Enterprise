<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inaklug - Konsultan Pendidikan Luar Negeri')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-purple: #46074E; 
            --primary-blue: #197BD0;
            --gradient-start: #46074E;
            --gradient-end: #197BD0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Ubuntu', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }

        /* ========== NAVBAR STYLING ========== */
        .navbar-custom {
            background-image: linear-gradient(
                to right,
                rgba(70, 7, 78, 1) 0%,
                rgba(70, 7, 78, 0.9) 20%,
                rgba(25, 123, 208, 0.9) 80%,
                rgba(25, 123, 208, 0.6) 100%
            );
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-custom::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to right, transparent 80%, rgba(255,255,255,0.1) 100%);
            pointer-events: none;
        }



        .navbar-custom.shrink {
            padding: 0.5rem 1.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .navbar-brand {
            color: white !important;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 2px;
            transition: font-size 0.3s ease;
            font-family: 'Ubuntu', sans-serif;
        }

        .navbar-custom.shrink .navbar-brand {
            font-size: 1.5rem;
        }

        /* Navbar Links - Updated with Ubuntu font specifications */
        .navbar-nav .nav-link {
            font-family: 'Ubuntu', sans-serif !important;
            font-size: 13px !important;
            line-height: 16px !important;
            color: rgba(255, 255, 255, 0.9) !important;
            margin-left: 2rem;
            margin-right: 1rem;
            font-weight: 400;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 0;
            text-align: left;
            cursor: pointer;
            text-decoration: none;
        }

        .home-nav-item .nav-link:hover {
        }

        .abour-nav-item .nav-link:hover {
            font-size: 0px !important;
            line-height: 16px !important; 
            padding: 0.5rem 0;
        }

        .navbar-nav .nav-link:hover {
            color: white !important;
            background: transparent;
        }

        .navbar-nav .nav-link.active {
            color: white !important;
            font-weight: 500;
        }

        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: white;
            transition: width 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after,
        .navbar-nav .nav-link.active::after {
            width: 100%;
        }

        /* Ensure links are clickable */
        .navbar-nav .nav-item {
            position: relative;
            z-index: 1;
        }

        .navbar-nav {
            align-items: flex-start;
        }

        /* Search Box */
        .search-box {
            position: relative;
            margin-right: 4rem;
            margin-left: 2rem;
        }

        .search-box input {
            background:none;
            border: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.5);
            color: ;
            padding: 0.5rem 2.5rem 0.5rem 1rem;
            padding-left: 2rem;
            border-radius: 0px;
            width: 200px;
            transition: all 0.3s;
            font-family: 'Ubuntu', sans-serif;
            font-size: 13px;
            
        }

        .search-box input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .search-box input:focus {
            background: rgba(255, 255, 255, 0.3);
            border-bottom: 1px solid rgba(255, 255, 255, 0.9);
            outline: none;
            border-color: white;
        }

        .search-box i {
            position: absolute;
            left: 0px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.53);
            pointer-events: none;
        }

        /* Register Button */
        .btn-register {
            background: #195395;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            font-weight: 1;
            border: none;
            transition: all 0.3s;
            white-space: nowrap;
            font-family: 'Ubuntu', sans-serif;
            font-size: 13px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-register:hover {
            background: rgba(255, 255, 255, 0.9);
            color: var(--primary-purple);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Hamburger Menu Custom */
        .navbar-toggler {
            border: 2px solid white;
            padding: 0.5rem;
            transition: all 0.3s;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.3);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* ========== HERO SECTION ========== */
        .hero-section {
            position: relative;
            height: 550px;
            overflow: hidden;
            margin-top: 80px;
        }

        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(70%);
        }

        .hero-overlay {
            position: absolute;
            width: 621px; 
            height: 120px; 
            bottom: 80px;
            left: 50px; 
            background: linear-gradient(90deg, rgba(70, 7, 78, 0.9) 0%, rgba(25, 123, 208, 0.9) 100%);
            border-radius: 0x;
            padding: 1rem 2rem;
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.3);
            gap: 1rem;
        }

        .hero-text {
            color: #ffffffff;
            font-size: 15px !important;
            letter-spacing: 1px;
            margin: 0;
            line-height: 1.4;
            text-align: left;
            position: relative;
            top: 10px;
            transform: translateY(10%);
        }

        .btn-details {
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .btn-details:hover {
            background: #fff;
            color: var(--primary-purple);
            transform: scale(1.05);
        }

        /* ========== SECTION STYLING ========== */
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: bold;
            margin: 4rem 0 3rem;
            color: #4A4A4A;
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
            padding: 80px 0;
            background: #f8f9fa;
        }

        .services-section .section-title {
            text-align: center;
            color: #4A4A4A;
            font-weight: 700;
            margin-bottom: 50px;
            font-size: 24px;
        }

        .service-card {
            position: relative;
            border-radius: 6px;
            overflow: hidden;
            height: 270px;
            width: 100%;
            max-width: 360px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .service-image-wrapper {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .service-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .service-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            top: 0;
            background: linear-gradient(to right, rgba(88, 28, 135, 0.95) 0%, rgba(88, 28, 135, 0.7) 50%, transparent 100%);
            padding: 40px 25px 30px;
            display: flex;
            align-items: flex-end;
            min-height: 50%;
        }

        .service-overlay::before {
            content: ""; /* Wajib */
            position: absolute;
            
            /* Posisi Garis: Di sebelah kiri dan vertikal di tengah */
            left: 5%; /* Jarak dari tepi kiri Hero Section */
            top: 0%; /* Mulai dari tengah vertikal */
            transform: translateY(-50%); /* Geser ke atas 50% dari tingginya sendiri untuk senter yang sempurna */
            
            /* Dimensi Garis */
            width: 0.1px; /* Ketebalan garis */
            height: 400px; /* Ketinggian garis (Tidak sampai bawah) */
            background-color: white; /* Warna garis */
            border-radius: 2px; /* Membuat ujung garis sedikit membulat */
        }

        .service-title {
            color: white;
            font-size: 20px;
            font-weight: 700;
            margin: 0;
            line-height: 1.3;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .service-card {
                height: 350px;
            }
            
            .service-title {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 575px) {
            .service-card {
                height: 300px;
            }
            
            .service-title {
                font-size: 1.3rem;
            }
            
            .services-section {
                padding: 60px 0;
            }
            
            .services-section .section-title {
                font-size: 2rem;
                margin-bottom: 30px;
            }
        }

        /* Partners Section */
        .partners-section {
            padding: 4rem 2rem;
            background: #f8f9fa;
        }

        .partner-card-item {
            background-color: #fff; /* Warna background putih */
            border-radius: 15px; /* Sudut membulat */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08); /* Shadow halus */
            padding: 1rem; /* Jarak antara border kotak dan logo */
            display: flex; /* Gunakan Flexbox untuk memposisikan logo di tengah */
            justify-content: center; /* Pusatkan secara horizontal */
            align-items: center; /* Pusatkan secara vertikal */
            height: 150px; /* Tinggi total kartu, sesuaikan jika perlu */
            margin: 1rem auto; /* Margin untuk jarak antar kartu dan pusatkan kartu di kolomnya */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Efek hover */
        }

        .partner-logo {
            width: 100%;
            max-width: 200px;
            height: 120px;
            object-fit: contain;
            margin: 1rem auto;
            transition: filter 0.3s;
            display: block;
        }

        .partner-logo:hover {
            filter: grayscale(0%);
        }

        /* Consultation Section */
        .consultation-section {
            padding: 0; /* Hapus padding luar agar banner menempel */
            /* background: #f8f9fa; <-- Hapus atau biarkan default */
        }

        /* Kotak Gradient (Menggantikan .consultation-box) */
        .consultation-banner-content {
            /* Menerapkan gradient, border-radius, dan shadow langsung ke konten */
            background: linear-gradient(90deg, var(--gradient-start) 0%, var(--gradient-end) 100%); /* Ubah ke 90deg agar horizontal */
            border-radius: 6px;
            padding: 2.5rem 3rem; /* Padding internal untuk jarak dari tepi gradient */
            margin-top: 4rem; /* Jarak dari section atas */
            margin-bottom: 4rem; /* Jarak ke section bawah */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            color: white; /* Teks putih di atas gradient */
        }

        /* Gaya Judul (GRATIS KONSELING STUDI DI LUAR NEGERI) */
        .consultation-banner-content .banner-title {
            color: white; /* Judul tetap putih */
            font-size: 1.5rem; /* Ukuran yang lebih besar */
            font-weight: 700; /* Tebal */
            margin-bottom: 0.25rem; /* Jarak kecil ke subtitle */
            line-height: 1.2;
        }

        /* Gaya Sub-judul (Konsultasi Seputar Kuliah/Bekerja Di Luar Negeri) */
        .consultation-banner-content .banner-subtitle {
            font-size: 1rem; /* Ukuran yang lebih kecil */
            font-weight: 400; /* Normal */
            opacity: 0.9; /* Sedikit transparan */
        }

        /* Gaya Tombol (MULAI KONSULTASI) */
        .btn-start-consultation {
            /* Tombol Transparan dengan Border Putih */
            background: transparent;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 5px; /* Sudut sedikit membulat */
            border: 2px solid white; /* Border putih */
            font-size: 0.95rem;
            font-weight: 500;
            transition: all 0.3s;
            white-space: nowrap;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
        }

        .btn-start-consultation:hover {
            background: rgba(255, 255, 255, 0.1); /* Sedikit efek saat hover */
            color: white;
            border-color: white;
        }

        /* Responsif: Penyesuaian untuk Mobile */
        @media (max-width: 991px) {
            .consultation-banner-content {
                padding: 2rem;
                text-align: center; /* Pusatkan teks pada mobile */
            }

            .consultation-banner-content .banner-title {
                font-size: 1.3rem;
            }
            
            .consultation-banner-content .banner-subtitle {
                font-size: 0.9rem;
            }
            
            .text-lg-end {
                text-align: center !important;
            }
        }

        /* ARTIKEL TERBARU SECTION */
        .latest-articles-section {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: white;
        }

        .article-section-title {
            font-family: 'Ubuntu', sans-serif;
            font-weight: bold;
            font-size: 1.5rem;
            color: #333; 
            letter-spacing: 2px;
            margin-bottom: 0.5rem;
        }

        /* Garis Pembeda di Bawah Judul */
        .title-divider {
            position: relative;
            height: 1px;
            background-color: #ddd; /* Garis abu-abu/putih muda */
            max-width: 900px;
            margin: 0 auto 3rem;
        }


        /* Gaya Kartu Artikel */
        .article-card-link {
            text-decoration: none;
            display: block;
            color: inherit;
            transition: transform 0.3s ease;
            overflow: hidden;
            border-radius: 4px;
            width: 100%;
            
        }

        .article-card-link:hover {
            transform: translateY(-5px); /* Efek angkat saat hover */
        }

        .article-card {
            border-radius: 4px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background-color: #fff;
            transition: box-shadow 0.3s ease;
        }

        .article-image {
            width: 360px;
            height: 195px; 
            /* max-width: 100%;    Penting: Pastikan gambar tidak melebihi lebar kolom pada mobile */
            margin: 0 auto;     /* Pusatkan gambar jika kolom lebih lebar dari 360px */
            display: block;     /* Agar margin auto bekerja */
            object-fit: cover; /* Memastikan gambar mengisi area 360x195px tanpa distorsi */
            transition: transform 0.3s ease;
        }

        .article-card-link:hover .article-image {
            transform: scale(1.05); /* Zoom in saat hover */
        }

        .article-title {
            font-family: 'Ubuntu', sans-serif;
            font-size: 1rem;
            font-weight: 500;
            color: #444;
            padding: 1rem 1rem 2rem; /* Padding bawah lebih besar */
            text-align: center;
            line-height: 1.4;
        }

        /* Gaya Tombol ARTIKEL LAINNYA */
        .btn-more-articles {
            background: white;
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.9rem;
            text-decoration: none;
            color: #46074E; /* Warna teks utama (primary-purple) */
            
            /* Border Gradient */
            border: 2px solid transparent;
            background-image: linear-gradient(white, white), 
                            linear-gradient(90deg, #46074E 0%, #197BD0 100%); /* Gradient Ungu ke Biru */
            background-origin: border-box;
            background-clip: padding-box, border-box;
            transition: all 0.3s ease;
        }

        .btn-more-articles:hover {
            color: #197BD0; /* Ubah warna teks saat hover */
            background-image: linear-gradient(#f9f9f9, #f9f9f9), 
                            linear-gradient(90deg, #46074E 0%, #197BD0 100%);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* CONTACT SECTION */
        .contact-section {
            padding: 6rem 2rem;
            background-color: #fff; /* Latar belakang putih */
        }

        .contact-title {
            font-family: 'Ubuntu', sans-serif;
            font-size: 24px;
            font-weight: 700;
            color: #4A4A4A;
            margin-bottom: 3rem;
        }

        /* Informasi Kantor */
        .office-info {
            max-width: 600px;
            margin: 0 auto;
        }

        .office-title {
            font-family: 'Ubuntu';
            font-size: 18px;
            color: #444;
            margin-bottom: 0.5rem;
        }

        .office-address,
        .office-phone {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
        }

        /* --- Gaya Tombol --- */

        .action-buttons a.btn {
            font-family: 'Ubuntu', sans-serif;
            font-weight: 0;
            font-size: 15px;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            width: 200px;
            height: 45px; /* Lebar minimum agar tombol terlihat besar */
        }


        /* 1. Tombol LOKASI KAMI (Solid Gradient) */
        .btn-lokasi {
            /* Gradient yang digunakan pada gambar (Ungu ke Biru) */
            background-image: linear-gradient(to right, #843e8fff 0%, #528bbcff 70%); 
            color: white;
            border: none;
            box-shadow: 0 4px 15px rgba(106, 58, 157, 0.4); /* Shadow sesuai warna gradient */
        }


        /* 2. Tombol KIRIM PESAN (Border Gradient) */
        .btn-kirim-pesan {
            background-color: white;
            color: #6A3A9D; /* Warna teks utama (ungu) */
            
            /* Membuat Border dengan Gradient */
            border: 2px solid transparent;
            
            /* Lapisan 1: Background (Putih) */
            /* Lapisan 2: Border (Gradient) */
            background-image: linear-gradient(white, white), 
                            linear-gradient(to right, #6A3A9D 0%, #4A90E2 100%);
            background-origin: border-box;
            background-clip: padding-box, border-box;
        }

        .btn-kirim-pesan:hover {
            color: #4A90E2; /* Ubah warna teks saat hover */
            background-color: #f9f9f9;
            /* Optional: Memberi sedikit shadow */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
        }

        /* Footer */
        .footer {
            background: linear-gradient(90deg, var(--gradient-start) 0%, var(--gradient-end) 100%);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        /* ========== RESPONSIVE DESIGN ========== */
        
        /* Large Desktop (1400px+) */
        @media (min-width: 1400px) {
            .container {
                max-width: 1320px;
            }
        }

        /* Desktop (1200px - 1399px) */
        @media (max-width: 1399px) {
            .hero-overlay {
                max-width: 550px;
                padding: 1.5rem 2rem;
            }
            
            .hero-text {
                font-size: 18px;
            }
        }

        /* Tablet Landscape (992px - 1199px) */
        @media (max-width: 1199px) {
            .navbar-nav .nav-link {
                margin: 0 0.5rem;
            }
            
            .search-box input {
                width: 180px;
            }
            
            .btn-register {
                padding: 0.5rem 1rem;
            }
        }

        /* Tablet Portrait (768px - 991px) */
        @media (max-width: 991px) {
            .navbar-custom {
                padding: 0.8rem 1rem;
            }

            .navbar-collapse {
                background: linear-gradient(
                180deg,
                rgba(177, 101, 187, 0.46) 0%,   /* warna ungu, 80% opasitas */
                rgba(25, 123, 208, 0.45) 80% /* warna biru, 80% opasitas */
            );
                opacity: 0.85;
                padding: 1.5rem;
                margin-top: 1rem;
                border-radius: 10px;
            }

            .navbar-nav {
                margin-bottom: 1rem;
                align-items: flex-start;
            }

            .navbar-nav .nav-link {
                margin: 0.5rem 0;
                padding: 0.5rem 1rem;
                border-radius: 5px;
                display: block;
                width: 100%;
            }

            .navbar-nav .nav-link:hover {
                background: rgba(255, 255, 255, 0.1);
            }

            .search-box {
                margin-right: 0;
                margin-bottom: 1rem;
                width: 100%;
            }

            .search-box input {
                width: 100%;
            }

            .btn-register {
                width: 100%;
                padding: 0.8rem;
                text-align: center;
            }

            .hero-section {
                height: 450px;
                margin-top: 70px;
            }

            .hero-overlay {
                flex-direction: column;
                text-align: center;
                bottom: 40px;
                padding: 1.5rem;
                gap: 1rem;
            }

            .hero-text {
                font-size: 16px;
            }

            .btn-details {
                width: 100%;
            }

            .section-title {
                font-size: 2rem;
            }

            .consultation-box {
                padding: 2rem;
            }

            .consultation-box h3 {
                font-size: 1.5rem;
            }
        }

        /* Mobile Landscape (576px - 767px) */
        @media (max-width: 767px) {
            .navbar-brand {
                font-size: 1.5rem;
            }

            .hero-section {
                height: 400px;
            }

            .hero-overlay {
                max-width: 85%;
                bottom: 30px;
                padding: 1.2rem;
            }

            .hero-text {
                font-size: 14px;
            }

            .btn-details {
                padding: 0.6rem 1.5rem;
                font-size: 0.9rem;
            }

            .section-title {
                font-size: 1.75rem;
                margin: 3rem 0 2rem;
            }

            .about-section,
            .services-section,
            .partners-section,
            .consultation-section,
            .contact-section {
                padding: 3rem 1.5rem;
            }

            .about-content {
                font-size: 1rem;
            }

            .service-card img {
                height: 200px;
            }

            .partner-logo {
                height: 80px;
                max-width: 150px;
            }

            .consultation-box {
                padding: 1.5rem;
            }

            .btn-consultation {
                padding: 0.8rem 2rem;
                font-size: 1rem;
            }

            .map-container {
                height: 300px;
            }
        }

        /* Mobile Portrait (up to 575px) */
        @media (max-width: 575px) {
            .navbar-custom {
                padding: 0.6rem 1rem;
            }

            .navbar-brand {
                font-size: 1.3rem;
            }

            .hero-section {
                height: 350px;
                margin-top: 60px;
            }

            .hero-overlay {
                max-width: 90%;
                bottom: 20px;
                padding: 1rem;
            }

            .hero-text {
                font-size: 12px;
                line-height: 1.3;
            }

            .btn-details {
                padding: 0.5rem 1rem;
                font-size: 0.85rem;
            }

            .section-title {
                font-size: 1.5rem;
                margin: 2.5rem 0 1.5rem;
            }

            .about-section,
            .services-section,
            .partners-section,
            .consultation-section,
            .contact-section {
                padding: 2.5rem 1rem;
            }

            .about-content {
                font-size: 0.95rem;
                line-height: 1.6;
            }

            .service-card img {
                height: 180px;
            }

            .service-card-body {
                padding: 1rem;
            }

            .partner-logo {
                height: 60px;
                max-width: 120px;
                margin: 0.5rem auto;
            }

            .consultation-box {
                padding: 1.2rem;
            }

            .consultation-box h3 {
                font-size: 1.3rem;
                margin-bottom: 1rem;
            }

            .consultation-box p {
                font-size: 0.9rem;
            }

            .btn-consultation {
                padding: 0.7rem 1.5rem;
                font-size: 0.9rem;
            }

            .contact-info,
            .message-form {
                padding: 1.5rem;
            }

            .contact-item {
                margin-bottom: 1rem;
            }

            .map-container {
                height: 250px;
            }

            .footer {
                padding: 1.5rem 1rem;
                font-size: 0.9rem;
            }
        }

        /* Extra Small Mobile (up to 375px) */
        @media (max-width: 375px) {
            .navbar-brand {
                font-size: 1.2rem;
            }

            .hero-text {
                font-size: 11px;
            }

            .btn-details {
                padding: 0.4rem 0.8rem;
                font-size: 0.8rem;
            }

            .section-title {
                font-size: 1.3rem;
            }

            .consultation-box h3 {
                font-size: 1.2rem;
            }
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('images/inaklug.png') }}" alt="Inaklug Logo" height="40" class="me-2">
                <span>Inaklug</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item home-nav-item">
                        <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item about-nav-item">
                        <a class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item services-nav-item">
                        <a class="nav-link {{ Request::routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Layanan Kami</a>
                    </li>
                    <li class="nav-item articles-nav-item">
                        <a class="nav-link {{ Request::routeIs('articles') ? 'active' : '' }}" href="{{ route('articles') }}">Artikel</a>
                    </li>
                    <li class="nav-item contact-nav-item">
                        <a class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Hubungi Kami</a>
                    </li>
                </ul>
                <form action="{{ route('search') }}" method="GET" class="d-flex align-items-center flex-column flex-lg-row w-100 w-lg-auto">
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
            <p class="mb-0">&copy; {{ date('Y') }} Inaklug - Konsultan Pendidikan Luar Negeri. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar shrink on scroll
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar-custom");
            if (window.scrollY > 60) {
                navbar.classList.add("shrink");
            } else {
                navbar.classList.remove("shrink");
            }
        });

        // Close navbar when clicking outside
        document.addEventListener('click', function(event) {
            const navbar = document.querySelector('.navbar-collapse');
            const toggler = document.querySelector('.navbar-toggler');
            const isClickInsideNavbar = navbar.contains(event.target);
            const isClickOnToggler = toggler.contains(event.target);
            
            if (!isClickInsideNavbar && !isClickOnToggler && navbar.classList.contains('show')) {
                toggler.click();
            }
        });

        // Ensure navbar links are clickable - close menu on link click (mobile)
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
                    document.querySelector('.navbar-toggler').click();
                }
            });
        });
    </script>

    @yield('scripts')
</body>
</html>