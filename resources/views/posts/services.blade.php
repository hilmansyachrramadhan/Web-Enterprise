@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<style>
    /* * PENTING: Jika Anda menggunakan framework CSS seperti Tailwind/Bootstrap
     * di 'layouts.app', Anda mungkin perlu menyesuaikan margin-top dan layout.
     * Kode ini disetel untuk lingkungan vanilla CSS.
     */
    body {
        margin: 0;
        font-family: 'Inter', sans-serif;
        background-color: #f4f4f4;
    }

    /* --- HERO SECTION STYLES --- */
    .hero-layanan-section {
        position: relative;
        height: 450px; /* Ketinggian hero disesuaikan */
        overflow: hidden;
        margin-top: -65px; /* Menarik bagian ini ke atas, jika ada header tetap (fixed header) */
        z-index: 1; 
        width: 100%;
    }

    .hero-layanan-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(70%); /* Meredupkan gambar */
    }

    .hero-layanan-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        /* Gradient Ungu (Disesuaikan agar lebih halus) */
        background: linear-gradient(to right, #46074E 0%, rgba(34, 138, 223, 0.7) 30%, transparent 80%);
        display: flex;
        align-items: flex-end; /* Menempatkan konten di bagian bawah */
        /* Padding horizontal untuk tepi */
        padding-left: 5%; 
        padding-right: 5%;
    }

    .hero-layanan-content h1 {
        color: white; 
        font-size: 1.5rem; /* Ukuran font lebih besar untuk Hero */
        margin-bottom: 25px; /* DINAJUKKAN: Mengangkat teks 25px dari tepi bawah overlay */
        margin-top: 0; 
        font-weight: 700;
        /* Pastikan teks tidak terlalu jauh dari kiri */
        text-align: left; 
    }

    /* --- ISI KONTEN UTAMA --- */
    .content-container {
        max-width: 1200px;
        margin: 40px auto;
        padding: 0 20px;
    }

    .profil-section {
        margin-bottom: 60px;
    }

    .profil-section h2 {
        font-size: 1.8rem;
        color: #333;
        padding-bottom: 10px;
        margin-bottom: 20px;
        margin-left: 90px
    }

    .profil-section p {
        font-size: 1rem;
        line-height: 1.6;
        color: #555;
        margin-bottom: 30px;
        margin-left: 90px;
    }

    .image-gallery {
        display: flex;
        gap: 20px;
        justify-content: center;
    }

    .image-gallery img {
        width: 485px;
        height: 253px;
        border-radius: 6px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        object-fit: cover;
    }

    .visi-misi-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        margin-top: 50px;
    }

    .visi-misi-card h3 {
        font-size: 1.5rem;
        color: #581c87; /* Warna ungu */
        margin-bottom: 15px;
        font-weight: 600;
        margin-left: 80px;
    }

    .visi-misi-card p {
        color: #555;
        line-height: 1.6;
        margin-left: 80px;
    }

    /* Responsif untuk tablet dan mobile */
    @media (max-width: 900px) {
        .visi-misi-grid {
            grid-template-columns: 1fr; /* Kolom tunggal di tablet/mobile */
        }
        .image-gallery {
            flex-direction: column;
        }
        .image-gallery img {
            width: 100%;
        }
        .hero-layanan-content h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
    }

    @media (max-width: 600px) {
        .content-container {
            margin: 20px auto;
            padding: 0 10px;
        }
        .hero-layanan-content h1 {
            font-size: 2rem;
        }
    }
</style>

<!-- HERO SECTION -->
<section class="hero-layanan-section">
    <!-- Gambar akan diambil dari folder public/images Laravel -->
    <img src="{{ asset('images/gatescambride.png') }}" 
         alt="Bangunan Tua Latar Belakang" 
         class="hero-layanan-image" 
         onerror="this.onerror=null;this.src='https://placehold.co/1200x350/581C87/FFFFFF?text=Latar+Belakang';"> 

    <div class="hero-layanan-overlay">
        <div class="hero-layanan-content">
            <h1>LAYANAN KAMI</h1>
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


</div>
@endsection
