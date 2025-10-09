@extends('layouts.app')

@section('title', 'Home - KLUG')

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
                INAKLUG adalah konsultan Pendidikan Internasional di Indonesia yang sudah 
                memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah, perjalanan 
                wisata dan berkarir di negara maju di dunia.
            </p>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="row">
            @foreach($services as $service)
            <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="service-card">
                    <img src="{{ asset('images/' . $service['image']) }}" alt="{{ $service['title'] }}">
                    <div class="service-card-body">
                        <h5>{{ $service['title'] }}</h5>
                        <p>{{ $service['description'] }}</p>
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
                <img src="{{ asset('images/partners/' . $partner['logo']) }}" 
                     alt="{{ $partner['name'] }}" 
                     class="partner-logo">
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Free Consultation Section -->
<section class="consultation-section">
    <div class="container">
        <div class="consultation-box">
            <h3>Gratis Konseling</h3>
            <p class="mb-4">
                Dapatkan konsultasi gratis dengan tim ahli kami untuk merencanakan 
                masa depan pendidikan Anda di luar negeri. Kami siap membantu Anda 
                menemukan universitas dan program studi yang tepat sesuai dengan 
                minat dan tujuan karir Anda.
            </p>
            <a href="{{ route('register') }}" class="btn btn-consultation">
                DAFTAR SEKARANG <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <h2 class="section-title">Hubungi Kami</h2>
        
        <div class="row">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <div class="contact-info">
                    <h4>Informasi Kontak</h4>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>Alamat:</strong><br>
                            Jl. Sudirman No. 123, Jakarta Pusat<br>
                            DKI Jakarta 10220, Indonesia
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <strong>Telepon:</strong><br>
                            +62 21 1234 5678
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>Email:</strong><br>
                            info@klug.co.id
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>Jam Operasional:</strong><br>
                            Senin - Jumat: 09:00 - 17:00<br>
                            Sabtu: 09:00 - 13:00
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-lg-6">
                <div class="message-form">
                    <h4 class="mb-4" style="color: var(--primary-purple);">Kirim Pesan</h4>
                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <input type="text" name="phone" class="form-control" placeholder="No. Telepon" required>
                        <textarea name="message" class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
                        <button type="submit" class="btn btn-send">
                            KIRIM PESAN <i class="fas fa-paper-plane ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Map Section -->
        <div class="row mt-5">
            <div class="col-12">
                <h4 class="text-center mb-4" style="color: var(--primary-purple);">Lokasi Kami</h4>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.666397707426!2d106.8229296!3d-6.1753924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f436b8c94b07%3A0x6ea6d5398b7c82f6!2sJl.%20Sudirman%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1234567890" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    // Smooth scroll to about section when clicking details button
    document.querySelector('.btn-details').addEventListener('click', function() {
        document.querySelector('.about-section').scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
        });
    });

    // Auto-close navbar on mobile when clicking a link
    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        link.addEventListener('click', function() {
            const navbarCollapse = document.querySelector('.navbar-collapse');
            const navbarToggler = document.querySelector('.navbar-toggler');
            
            if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }
        });
    });

    // Lazy loading for images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img').forEach(img => {
            imageObserver.observe(img);
        });
    }
</script>
@endsection