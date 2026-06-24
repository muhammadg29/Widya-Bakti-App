<style>
.site-footer {
            background: linear-gradient(135deg, #0a0a5e 0%, #0014ff 100%);
            color: white;
            position: relative;
            padding-top: 100px;
            overflow: hidden;
        }
        
        .footer-wave {
            position: absolute;
            top: -1px;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }
        
        .footer-wave svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 100px;
        }
        
        .footer-wave .shape-fill {
            fill: #FFFFFF;
        }
        
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
            position: relative;
            z-index: 1;
        }
        
        .footer-column {
            flex: 1;
            min-width: 250px;
            margin-bottom: 40px;
            padding: 0 20px;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .footer-column.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .footer-logo img {
            height: 50px;
            margin-right: 15px;
        }
        
        .footer-logo span {
            font-size: 1.4rem;
            font-weight: 700;
        }
        
        .footer-description {
            margin-bottom: 25px;
            line-height: 1.7;
            opacity: 0.9;
        }
        
        .footer-contact p {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            opacity: 0.9;
        }
        
        .footer-contact i {
            margin-right: 10px;
            color: #7ec8ff;
            width: 20px;
        }
        
        .footer-heading {
            font-size: 1.4rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 15px;
        }
        
        .footer-heading::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(to right, #7ec8ff, #ffffff);
            border-radius: 3px;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 15px;
            transition: all 0.3s ease;
            transform: translateX(0);
        }
        
        .footer-links li:hover {
            transform: translateX(10px);
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.9);
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-links i {
            margin-right: 10px;
            color: #7ec8ff;
            font-size: 0.8rem;
        }
        
        .footer-social {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }
        
        .social-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: white;
            color: #0014ff;
            transform: translateY(-5px);
        }
        
        .footer-newsletter h4 {
            margin-bottom: 15px;
            font-weight: 500;
        }
        
        .newsletter-form {
            display: flex;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50px;
            overflow: hidden;
        }
        
        .newsletter-form input {
            flex: 1;
            background: transparent;
            border: none;
            padding: 12px 20px;
            color: white;
            outline: none;
        }
        
        .newsletter-form input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        
        .newsletter-form button {
            background: white;
            color: #0014ff;
            border: none;
            width: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .newsletter-form button:hover {
            background: #7ec8ff;
            color: white;
        }
        
        .footer-bottom {
            background: rgba(0, 0, 0, 0.2);
            padding: 20px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .footer-bottom .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .footer-bottom p {
            opacity: 0.8;
            font-size: 0.9rem;
        }
        
        .footer-legal {
            display: flex;
            gap: 20px;
        }
        
        .footer-legal a {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        
        .footer-legal a:hover {
            color: white;
        }
        
        /* Animations */
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        .footer-wave {
            animation: float 6s ease-in-out infinite;
        }
        
        /* Responsive Footer */
        @media (max-width: 992px) {
            .footer-content {
                padding: 50px 20px;
            }
            
            .footer-column {
                flex: 0 0 50%;
            }
        }
        
        @media (max-width: 768px) {
            .footer-column {
                flex: 0 0 100%;
            }
            
            .footer-bottom .container {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .footer-legal {
                justify-content: center;
            }
        }
    </style>

    <!-- Footer Section -->
    <footer class="site-footer">
        <div class="footer-wave">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
            </svg>
        </div>
        
        <div class="footer-content">
            <div class="footer-column">
                <div class="footer-logo">
                    <img src="landing/assets/images/logo.png" alt="Scripta Logo" style="width: 70px; height: auto;">
                    <span>Widya Bakti Press</span>
                </div>
                <p class="footer-description">
                    Layanan penerbitan ilmiah profesional untuk buku ajar, monograf, referensi, dan jurnal penelitian dengan standar akademik tertinggi.
                </p>
                <div class="footer-contact">
                    <p><i class="fas fa-envelope"></i> info@scriptapublishing.id</p>
                    <p><i class="fas fa-phone-alt"></i> 0851 3643 8305</p>
                    <p><i class="fas fa-map-marker-alt"></i> Jalan Ma Eja No. 66-103 kota bandung</p>
                </div>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-heading">Tautan Cepat</h3>
                <ul class="footer-links">
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Beranda</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Tentang Kami</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Portofolio</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Submit Naskah</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> FAQ</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-heading">Layanan Kami</h3>
                <ul class="footer-links">
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Penerbitan Buku Ajar</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Penerbitan Monograf</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Penerbitan Referensi</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Jurnal Ilmiah</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Pelatihan Akademik</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-heading">Ikuti Kami</h3>
                <div class="footer-social">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
                <div class="footer-newsletter">
                    <h4>Berlangganan Newsletter</h4>
                    <form class="newsletter-form">
                        <input type="email" placeholder="Email Anda" required>
                        <button type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; 2023 Widya Bakti Press Publishing. Hak Cipta Dilindungi.</p>
                <div class="footer-legal">
                    <a href="#">Kebijakan Privasi</a>
                    <a href="#">Syarat & Ketentuan</a>
                    <a href="#">Peta Situs</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function checkFooterVisibility() {
            const footerColumns = document.querySelectorAll('.footer-column');
            const footer = document.querySelector('.site-footer');
            
            if (footer) {
                const footerTop = footer.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (footerTop < windowHeight) {
                    footerColumns.forEach((column, index) => {
                        column.style.transitionDelay = `${index * 0.1}s`;
                        column.classList.add('animate');
                    });
                }
            }
        }
        
        // Initialize on load
        window.addEventListener('load', checkFooterVisibility);
        
        // Check on scroll
        window.addEventListener('scroll', checkFooterVisibility);
    </script>

