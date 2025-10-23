<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- About Column -->
            <div class="col-md-4 mb-4">
                <h5 class="footer-title">KLUG</h5>
                <p class="footer-text">
                    Konsultan pendidikan luar negeri terpercaya yang membantu mewujudkan impian kuliah dan berkarir di luar negeri.
                </p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-md-2 mb-4">
                <h5 class="footer-title">Menu</h5>
                <ul class="footer-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                    <li><a href="{{ route('services') }}">Layanan Kami</a></li>
                    <li><a href="{{ route('articles') }}">Artikel</a></li>
                </ul>
            </div>
            
            <!-- Services -->
            <div class="col-md-3 mb-4">
                <h5 class="footer-title">Layanan</h5>
                <ul class="footer-links">
                    <li><a href="{{ route('services') }}">Konsultasi Pendidikan</a></li>
                    <li><a href="{{ route('services') }}">Beasiswa</a></li>
                    <li><a href="{{ route('services') }}">Visa & Akomodasi</a></li>
                    <li><a href="{{ route('services') }}">Career Coaching</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div class="col-md-3 mb-4">
                <h5 class="footer-title">Hubungi Kami</h5>
                <ul class="footer-contact">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Jl. Pendidikan No. 123, Jakarta 12345</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>+62 21 1234 5678</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>info@klug.co.id</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="footer-bottom">
            <p class="copyright">
                &copy; {{ date('Y') }} KLUG - Konsultan Pendidikan Luar Negeri. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>