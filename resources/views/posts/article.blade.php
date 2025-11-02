@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<style>
    
    body {
        margin: 0;
        font-family: 'Inter', sans-serif;
        background-color: #ffffffff;
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

    .mitra-title {
        font-weight: 600;
        font-size: 24px;
        margin-top: 40px;
        margin-bottom: 25px;
        color: #828282ff;
        text-align: left;  
        margin-left: 200px; 
    }

    .artikel-preview-section {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 60px 0; /* Jarak sebelum Hubungi Kami */
    }

    .artikel-item {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 30px;
        max-width: 900px;
    }

    .artikel-item img {
        width: 260px;
        height: 150px;
        margin-bottom: 20px;
        object-fit: cover;
        border-radius: 10px;
    }

    .artikel-text {
        max-width: 500px;
    }

    .artikel-text h3 {
        margin-bottom: 10px;
        font-size: 1.3rem;
        color: #828282ff;
    }

    .artikel-text p {
        color: #828282ff;
        line-height: 1.6;
    }

    /* PAGINATION */
    .artikel-pagination {
        display: flex;
        gap: 12px;
        margin-top: 25px;
    }

    .artikel-pagination .page {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        border: 1.6px solid #b9b9b9;
        cursor: pointer;
        font-size: 0.9rem;
        transition: 0.25s;
    }

    .artikel-pagination .page:hover {
        transform: scale(1.1);
    }

    .artikel-pagination .active {
        background: linear-gradient(to right, #793c81, #4177b5);
        color: white;
        border: none;
    }

    /* Garis bawah */
    .artikel-divider {
        width: 100%;
        max-width: 900px;
        margin-top: 25px;
        border: 0;
        border-top: 1.4px solid #dadada;
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

        <hr class="artikel-divider">
    </div>

    <h3 class="mitra-title">Mitra Kami</h3>

    <div class="artikel-preview-section">

        <div class="artikel-item show">
            <img src="images/artikel1.jpg" alt="Artikel 1">
            <div class="artikel-text">
                <h3>
                    <br> Penting! Cara Mudah agar Bisa Kuliah Keluar Negeri
                    <br> dengan Beasiswa
                </h3>
                <p>Selasa, 18 Feb 2020 12:01 WIB.</p>
            </div>
        </div>

        <div class="artikel-item">
            <img src="images/artikel2.jpg" alt="Artikel 2">
            <div class="artikel-text">
                <h3>
                    <br> Penting! Cara Mudah agar Bisa Kuliah Keluar Negeri
                    <br> dengan Beasiswa
                </h3>
                <p>Selasa, 18 Feb 2020 12:01 WIB</p>
            </div>
        </div>

        <div class="artikel-item">
            <img src="images/artikel3.jpg" alt="Artikel 3">
            <div class="artikel-text">
                <h3>
                    <br> Penting! Cara Mudah agar Bisa Kuliah Keluar Negeri
                    <br> dengan Beasiswa</h3>
                <p>Selasa, 18 Feb 2020 12:01 WIB</p>
            </div>
        </div>

        <div class="artikel-item">
            <img src="images/artikel4.jpg" alt="Artikel 4">
            <div class="artikel-text">
                <h3>
                    <br> Penting! Cara Mudah agar Bisa Kuliah Keluar Negeri
                    <br> dengan Beasiswa
                </h3>
                <p>Selasa, 18 Feb 2020 12:01 WIB</p>
            </div>
        </div>

        <div class="artikel-item">
            <img src="images/nurse2.jpg" alt="Artikel 5">
            <div class="artikel-text">
                <h3>
                    <br> Penting! Cara Mudah agar Bisa Kuliah Keluar Negeri
                    <br> dengan Beasiswa
                </h3>
                <p>Selasa, 18 Feb 2020 12:01 WIB</p>
            </div>
        </div>

        <div class="artikel-pagination">
            <span class="page active" data-index="0">1</span>
            <span class="page" data-index="1">2</span>
            <span class="page" data-index="2">3</span>
            <span class="page" data-index="3">4</span>
            <span class="page" data-index="4">5</span>
        </div>

        <hr class="artikel-divider">

    </div>

    <section class="contact-section text-center py-5">
    <div class="container">
        <h2 class="contact-title mb-3">Hubungi Kami</h2>

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

<script>
    const pages = document.querySelectorAll('.page');
    const items = document.querySelectorAll('.artikel-item');

    pages.forEach(page => {
        page.addEventListener('click', () => {
            const index = page.getAttribute('data-index');

            // sembunyikan semua artikel
            items.forEach(item => item.classList.remove('show'));

            // tampilkan artikel sesuai index
            items[index].classList.add('show');

            // ubah aktif pagination
            pages.forEach(p => p.classList.remove('active'));
            page.classList.add('active');
        });
    });
</script>

@endsection
