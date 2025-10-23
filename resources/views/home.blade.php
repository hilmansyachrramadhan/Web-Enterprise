@extends('layouts.app')

@section('title', 'Home - Inaklug')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <img src="{{ asset('images/assetbuilding.png') }}" alt="Building" class="hero-image">
    <div class="hero-overlay">
        <h1 class="hero-text">INGIN KULIAH DAN BERKARIR<br>DI LUAR NEGERI?</h1>
        <button class="btn btn-details">
            SELENGKAPNYA <i class="fas fa-chevron-down ms-2"></i>
        </button>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <h2 class="section-title">Tentang Kami</h2>
        <div class="about-content">
            <p>
                INAKLUG adalah konsultan Pendidikan Internasional di Indonesia yang sudah <br> 
                memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan 
                wisata <br> dan berkarir di negara maju di dunia.
            </p>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="service-card">
                    <div class="service-image-wrapper">
                        <img src="{{ asset('images/' . $service['image']) }}" alt="{{ $service['title'] }}" class="service-image">
                        <div class="service-overlay">
                            <h3 class="service-title">{{ $service['title'] }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="partners-section">
    <div class="container">
        <h2 class="section-title">Mitra Kami</h2>
        <div class="row justify-content-center align-items-center">
            @foreach($partners as $partner)
            <div class="col-6 col-sm-4 col-md-3 text-center mb-3">
                <div class="partner-card-item">
                    <img src="{{ asset('images/' . $partner['logo']) }}" 
                        alt="{{ $partner['name'] }}" 
                        class="partner-logo">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<<section class="consultation-section">
    <div class="container">
        <div class="row align-items-center consultation-banner-content">
            <div class="col-12 col-lg-9 text-start">
                <h3 class="banner-title">GRATIS KONSELING STUDI DI LUAR NEGERI</h3>
                <p class="banner-subtitle mb-0">
                    Konsultasi Seputar Kuliah/Bekerja Di Luar Negeri
                </p>
            </div>
            
            <div class="col-12 col-lg-3 text-lg-end text-center mt-3 mt-lg-0">
                <a href="{{ route('register') }}" class="btn btn-start-consultation">
                    MULAI KONSULTASI <i class="fas fa-chevron-right ms-2"></i>
                </a>
            </div>
        </div>
     </div>
</section>

<!-- Konten lainnya -->
<section class="latest-articles-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="article-section-title">ARTIKEL TERBARU</h2>
                <div class="title-divider mb-5"></div>
            </div>
        </div>

        <div class="row g-4 justify-content-center mb-4">
            
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <a href="#" class="article-card-link">
                    <div class="article-card">
                        <img src="{{ asset('images/studijerman.png') }}" alt="Gadis meditasi di danau" class="article-image">
                        <p class="article-title">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <a href="#" class="article-card-link">
                    <div class="article-card">
                        <img src="{{ asset('images/korona.png') }}" alt="Taman vertikal modern" class="article-image">
                        <p class="article-title">Uni Eropa Menghadapi Virus Korona</p>
                    </div>
                </a>
            </div>
            <div class="row g-4 justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <a href="#" class="article-card-link">
                    <div class="article-card">
                        <img src="{{ asset('images/bahasajerman.png') }}" alt="Pemandangan gunung bersalju saat matahari terbit" class="article-image">
                        <p class="article-title">Belajar Bahasa Jerman Bersama Goethe Insistut</p>
                    </div>
                </a>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <a href="#" class="article-card-link">
                    <div class="article-card">
                        <img src="{{ asset('images/gatescambride.png') }}" alt="Siluet orang berjalan di pantai saat matahari terbenam" class="article-image">
                        <p class="article-title">Apa Itu Gates Cambridge? Yuk Cari Tahu</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="{{ route('articles') }}" class="btn-more-articles">
                    LAINNYA
                </a>
            </div>
        </div>
    </div>
</section>

<section class="contact-section text-center py-5">
    <div class="container">
        <h2 class="contact-title mb-5">Hubungi Kami</h2>

        <div class="office-info mb-5">
            <h3 class="office-title">Kantor Pusat</h3>
            <p class="office-address mb-1">
                Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat
            </p>
            <p class="office-phone">
                Phone: 085286754052
            </p>
        </div>

        <div class="action-buttons d-flex flex-column flex-sm-row justify-content-center gap-3">
            
            <a href="#" class="btn btn-lokasi">
                LOKASI KAMI
            </a>

            <a href="#" class="btn btn-kirim-pesan">
                KIRIM PESAN
            </a>
        </div>
    </div>
</section>

@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endsection
