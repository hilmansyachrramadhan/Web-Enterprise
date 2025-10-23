<nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
    <div class="container-fluid px-4">
        <!-- Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="KLUG Logo" class="logo">
        </a>
        
        <!-- Toggler for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        Tentang Kami
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">
                        Layanan Kami
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('articles') ? 'active' : '' }}" href="{{ route('articles') }}">
                        Artikel
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                        Hubungi Kami
                    </a>
                </li>
            </ul>
            
            <!-- Search & Register Button -->
            <div class="d-flex align-items-center gap-3">
                <!-- Search Form -->
                <form action="{{ route('search') }}" method="GET" class="search-form">
                    <div class="search-wrapper">
                        <i class="fas fa-search search-icon"></i>
                        <input 
                            type="text" 
                            name="q" 
                            class="form-control search-input" 
                            placeholder="Ketik pencarian"
                            value="{{ request('q') }}"
                        >
                    </div>
                </form>
                
                <!-- Daftar Online Button -->
                <a href="{{ route('register') }}" class="btn btn-register">
                    DAFTAR ONLINE
                </a>
            </div>
        </div>
    </div>
</nav>