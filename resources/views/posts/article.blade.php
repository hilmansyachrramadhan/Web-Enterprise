@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<style>
    
    body {
        margin: 0;
        font-family: 'Inter', sans-serif;
        background-color: #f4f4f4;
    }

    /* --- HERO SECTION STYLES --- */
    .hero-layanan-section {
        position: relative;
        height: 450px; 
        overflow: hidden;
        margin-top: -65px; 
        z-index: 1; 
        width: 100%;
    }

    .hero-layanan-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: brightness(70%); 
    }

    .hero-layanan-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: linear-gradient(to right, #793c81ff , transparent 30%);
        display: flex;
        align-items: flex-end; 
        padding-left: 5%; 
        padding-right: 5%;
    }

    .hero-layanan-content h1 {
        color: white; 
        font-size: 1.5rem; 
        margin-bottom: 25px; 
        margin-top: 0; 
        font-weight: 700;
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

    .Desc-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        margin-top: 30px;
    }

    .Desc-card h3 {
        font-size: 1rem;
        color: #2c2b2dff;
        font-weight: 600;
        margin-left: 10rem;
        font: justify;
        margin-bottom: 80px;
    }

    .Desc-card p {
        color: #555;
        line-height: 1.6;
        margin-left: 80px;
    }

    @media (max-width: 900px) {
        .Desc-grid {
            grid-template-columns: 1fr; 
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
    <img src="{{ asset('images/article.jpeg') }}" 
         class="hero-layanan-image" 
         onerror="this.onerror=null;this.src='https://placehold.co/1200x350/581C87/FFFFFF?text=Latar+Belakang';"> 

    <div class="hero-layanan-overlay">
        <div class="hero-layanan-content">
            <h1>Tips
                <br> Penting! Cara Mudah agar Bisa Kuliah Keluar Negeri
                <br> dengan Beasiswa
            </h1>
        </div>
    </div>
</section>

<!-- KONTEN UTAMA HALAMAN -->
<div class="content-container">   
        <div class="image-gallery">
            <img src="{{ asset('images/korona.png') }}" alt="Siswa sedang belajar dan menunjuk papan">
            <img src="{{ asset('images/htw.png') }}" alt="Siswa menggunakan kacamata Virtual Reality">
        </div>
    </section>

    <div class="Desc-grid">
        <section class="Desc-card">
            <h3>Penting! Cara Mudah agar Bisa Kuliah Keluar <br> Negeri dengan Beasiswa</h3>
        </section>

         <section class="Desc-card">
            <h3>Penting! Cara Mudah agar Bisa Kuliah Keluar <br> Negeri dengan Beasiswa</h3>
        </section>
    </div>

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
