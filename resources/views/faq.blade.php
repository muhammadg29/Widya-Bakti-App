<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Widya Bakti Press</title>
    <link rel="shortcut icon" href="landing/assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header Styles */
        header {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 30px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }
        
        header.scrolled {
            background-color: rgba(10, 10, 94, 0.98);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }
        
        header.scrolled .logo-text,
        header.scrolled nav ul li a {
            color: white;
        }
        
        header.scrolled .journal-btn {
            background-color: white;
            color: #0a0a5e;
        }
        
        header.scrolled .journal-btn:hover {
            background-color: #f1f1f1;
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            transition: padding 0.3s ease;
        }
        
        header.scrolled .header-container {
            padding: 10px 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
        }
        
        .logo img {
            height: 40px;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        header.scrolled .logo img {
            height: 35px;
        }
        
        .logo-text {
            font-size: 20px;
            font-weight: 700;
            color: #0a0a5e;
            transition: all 0.3s ease;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            position: relative;
            margin-left: 25px;
        }
        
        nav ul li a {
            font-weight: 600;
            color: #333;
            transition: all 0.3s ease;
            position: relative;
        }
        
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #0014ff;
            transition: width 0.3s ease;
        }
        
        nav ul li a:hover::after {
            width: 100%;
        }
        
        nav ul li a:hover {
            color: #0014ff;
        }
        
        .dropdown {
            position: relative;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 200px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            z-index: 1;
            top: 100%;
            left: 0;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform: translateY(10px);
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        header.scrolled .dropdown-content {
            background-color: rgba(20, 20, 120, 0.95);
        }
        
        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            display: block;
            border-bottom: 1px solid #f1f1f1;
            transition: all 0.2s ease;
        }
        
        header.scrolled .dropdown-content a {
            color: white;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .dropdown-content a:hover {
            background-color: #f8f9fa;
            color: #0014ff;
            padding-left: 20px;
        }
        
        header.scrolled .dropdown-content a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .dropdown-content a:last-child {
            border-bottom: none;
        }
        
        .journal-btn {
            background-color: #0014ff;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .journal-btn:hover {
            background-color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 20, 255, 0.3);
        }
        
        .journal-btn i {
            margin-right: 8px;
        }
      
        /* FAQ Page Hero Section */
        .faq-hero {
            background: linear-gradient(135deg, #0a0a5e, #0014ff);
            color: white;
            padding: 160px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .faq-hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA3KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==');
            opacity: 0.3;
        }
        
        .faq-hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        
        .faq-hero.animate .faq-hero-content {
            opacity: 1;
            transform: translateY(0);
        }
        
        .faq-hero h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            font-weight: 800;
            line-height: 1.2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        
        .faq-hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* FAQ Section Styles */
        .faq-section {
            padding: 80px 0;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .section-title.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            color: #0a0a5e;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .section-title p {
            font-size: 1.1rem;
            color: #555;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #0a0a5e, #0014ff);
            border-radius: 2px;
        }
        
        .faq-container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .faq-category {
            margin-bottom: 60px;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .faq-category.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        .category-title {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 3px solid #0014ff;
        }
        
        .category-title i {
            font-size: 28px;
            width: 60px;
            height: 60px;
            background: rgba(10, 10, 94, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-right: 20px;
            color: #0a0a5e;
        }
        
        .category-title h3 {
            font-size: 1.8rem;
            color: #0a0a5e;
        }
        
        .faq-item {
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            margin-bottom: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .faq-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 20, 255, 0.15);
        }
        
        .faq-question {
            padding: 25px 30px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            font-size: 1.1rem;
            color: #0a0a5e;
            background: rgba(10, 10, 94, 0.03);
            transition: all 0.3s ease;
        }
        
        .faq-question:hover {
            background: rgba(10, 10, 94, 0.07);
        }
        
        .faq-question i {
            transition: transform 0.3s ease;
        }
        
        .faq-answer {
            padding: 0 30px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.4s ease;
            color: #555;
            line-height: 1.7;
        }
        
        .faq-item.active .faq-answer {
            padding: 25px 30px;
            max-height: 1000px;
        }
        
        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }
        
        .contact-promo {
            background: linear-gradient(135deg, #0a0a5e, #0014ff);
            border-radius: 15px;
            padding: 50px;
            text-align: center;
            color: white;
            margin-top: 60px;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }
        
        .contact-promo.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        .contact-promo::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA3KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==');
            opacity: 0.2;
        }
        
        .contact-promo-content {
            position: relative;
            z-index: 1;
            max-width: 700px;
            margin: 0 auto;
        }
        
        .contact-promo h3 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        
        .contact-promo p {
            margin-bottom: 30px;
            opacity: 0.9;
            font-size: 1.1rem;
        }
        
        .contact-btn {
            display: inline-flex;
            align-items: center;
            background: white;
            color: #0014ff;
            padding: 14px 35px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .contact-btn:hover {
            background: #f1f1f1;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        
        .contact-btn i {
            margin-right: 10px;
        }
        
        /* Footer Styles */
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
        
        /* Responsive Styles */
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
            
            .faq-question {
                padding: 20px;
                font-size: 1rem;
            }
            
            .faq-answer {
                padding: 0 20px;
            }
            
            .faq-item.active .faq-answer {
                padding: 20px;
            }
            
            .contact-promo {
                padding: 30px 20px;
            }
            
            .contact-promo h3 {
                font-size: 1.6rem;
            }
        }
        
        @media (max-width: 480px) {
            .faq-hero h1 {
                font-size: 2.2rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .category-title h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header id="mainHeader">
        <div class="container header-container">
            <div class="logo">
                <img src="landing/assets/images/logo.png" alt="Scripta Logo" style="width: 70px; height: auto;">
                <span class="logo-text">Widya Bakti Press</span>
            </div>
            
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    
                    <li class="dropdown">
                        <a href="#">Tentang Kami <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-content">
                            <a href="{{ route('redaksi') }}">Dewan Redaksi</a>
                            <a href="{{ route('team') }}">Tentang Kami</a>
                            <a href="{{ route('kontak') }}">Kontak</a>
                        </div>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#">Portofolio <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-content">
                            <a href="https://ojs.ejournalsrc.com/">Katalog</a>
                        </div>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#">Submit Naskah <i class="fas fa-chevron-down"></i></a>
                        <div class="dropdown-content">
                            <a href="{{ route('registrasi') }}">Registrasi</a>
                            <a href="{{ route('template') }}">Template</a>
                            <a href="{{ route('faq') }}" class="active">FAQ</a>
                        </div>
                    </li>
                    
                    <li>
                        <a href="https://ojs.ejournalsrc.com/" class="journal-btn">
                            <i class="fas fa-book-open"></i> Rumah Jurnal Scripta
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- FAQ Hero Section -->
    <section class="faq-hero" id="faqHero">
        <div class="faq-hero-content">
            <h1>Pertanyaan Umum</h1>
            <p>Temukan jawaban untuk pertanyaan yang sering diajukan tentang penerbitan akademik dan layanan kami</p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <div class="section-title" id="sectionTitle">
                <h2>Frequently Asked Questions</h2>
                <p>Kami telah mengumpulkan pertanyaan yang paling sering diajukan untuk membantu Anda</p>
            </div>
            
            <div class="faq-container">
                <!-- Publishing Process -->
                <div class="faq-category" id="publishingCategory">
                    <div class="category-title">
                        <i class="fas fa-book-open"></i>
                        <h3>Proses Penerbitan</h3>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Berapa lama proses penerbitan buku akademik? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Proses penerbitan buku akademik biasanya memakan waktu 3-6 bulan, tergantung pada kompleksitas naskah dan proses review. Tahapan meliputi: review awal (2-4 minggu), editing (4-8 minggu), desain layout (2-4 minggu), dan produksi (2-4 minggu).</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Bagaimana proses review naskah dilakukan? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Naskah akan direview oleh minimal dua ahli di bidang terkait melalui proses peer-review buta (double-blind review). Proses ini memastikan kualitas akademik dan orisinalitas karya. Penulis akan menerima laporan review dan saran perbaikan jika diperlukan.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Apakah naskah yang ditolak dapat diajukan kembali? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Ya, naskah yang ditolak dapat diajukan kembali setelah dilakukan perbaikan sesuai saran reviewer. Kami sarankan untuk melampirkan surat tanggapan yang menjelaskan perubahan yang telah dilakukan pada naskah.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Submission Guidelines -->
                <div class="faq-category" id="submissionCategory">
                    <div class="category-title">
                        <i class="fas fa-file-upload"></i>
                        <h3>Panduan Submit Naskah</h3>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Format file seperti apa yang diterima? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Kami menerima naskah dalam format .docx (Microsoft Word). Untuk gambar, harap sertakan file terpisah dalam format .jpg, .png, atau .tiff dengan resolusi minimal 300dpi. Semua file harus diunggah melalui sistem submit online kami.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Apakah ada batasan jumlah halaman? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Untuk buku monograf, kami menerima naskah 80-300 halaman. Untuk buku ajar, 150-500 halaman. Artikel jurnal biasanya 15-30 halaman termasuk referensi. Silakan lihat panduan spesifik untuk setiap jenis publikasi di halaman template.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Bagaimana cara mengutip sumber dengan benar? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Kami menggunakan gaya sitasi APA edisi ke-7 untuk semua publikasi. Pastikan semua kutipan dalam teks memiliki entri lengkap di daftar referensi. Gunakan alat reference manager seperti Zotero, Mendeley, atau EndNote untuk konsistensi.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Copyright and Licensing -->
                <div class="faq-category" id="copyrightCategory">
                    <div class="category-title">
                        <i class="fas fa-copyright"></i>
                        <h3>Hak Cipta & Lisensi</h3>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Bagaimana kebijakan hak cipta Widya Bakti Press? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Penulis memegang hak cipta atas karya mereka dan memberikan hak publikasi pertama kepada Widya Bakti Press. Semua karya diterbitkan di bawah lisensi Creative Commons Attribution 4.0 International (CC BY 4.0), yang memungkinkan penggunaan ulang dengan atribusi.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Apakah saya dapat menerbitkan karya yang sama di tempat lain? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Setelah karya diterbitkan oleh Widya Bakti Press, Anda dapat mempublikasikan versi pra-cetak di repositori institusi atau situs pribadi. Untuk penerbitan ulang di media lain, harap beri tahu kami dan sertakan informasi bahwa karya tersebut pertama kali diterbitkan oleh kami.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Bagaimana dengan kebijakan akses terbuka? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Semua jurnal kami adalah akses terbuka (open access), sementara buku tersedia dalam versi cetak dan digital. Versi digital buku dapat diakses melalui langganan institusi atau pembelian individual. Beberapa buku juga tersedia dalam model open access dengan biaya publikasi.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Fees and Payments -->
                <div class="faq-category" id="feesCategory">
                    <div class="category-title">
                        <i class="fas fa-money-bill-wave"></i>
                        <h3>Biaya & Pembayaran</h3>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Apakah ada biaya untuk penerbitan? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Untuk jurnal ilmiah, tidak ada biaya submit atau publikasi (dibebankan pada institusi). Untuk buku, terdapat biaya produksi yang bervariasi tergantung panjang naskah, jumlah gambar, dan kualitas cetak. Kami menyediakan paket penerbitan mulai dari Rp 3.500.000.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Metode pembayaran apa yang diterima? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Kami menerima pembayaran melalui transfer bank (BCA, Mandiri, BRI), kartu kredit (Visa, Mastercard), dan dompet digital (OVO, GoPay, Dana). Pembayaran dapat dilakukan secara penuh atau cicilan sesuai kesepakatan.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            Apakah ada diskusi untuk penulis dari institusi mitra? <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Ya, kami menawarkan diskusi khusus untuk penulis dari institusi yang memiliki perjanjian kerjasama dengan Widya Bakti Press. Silakan hubungi tim hubungan institusi kami untuk informasi lebih lanjut tentang program ini.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Promo -->
                <div class="contact-promo" id="contactPromo">
                    <div class="contact-promo-content">
                        <h3>Masih Ada Pertanyaan?</h3>
                        <p>Tim dukungan kami siap membantu menjawab pertanyaan Anda lebih lanjut. Jangan ragu untuk menghubungi kami melalui saluran komunikasi yang tersedia.</p>
                        <a href="{{ route('kontak') }}" class="contact-btn">
                            <i class="fas fa-envelope"></i> Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <li><a href="{{ route('home') }}"><i class="fas fa-chevron-right"></i> Beranda</a></li>
                    <li><a href="{{ route('team') }}"><i class="fas fa-chevron-right"></i> Tentang Kami</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Portofolio</a></li>
                    <li><a href="https://ojs.ejournalsrc.com/"><i class="fas fa-chevron-right"></i> Submit Naskah</a></li>
                    <li><a href="{{ route('faq') }}"><i class="fas fa-chevron-right"></i> FAQ</a></li>
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
        // Header scroll animation
        window.addEventListener('scroll', function() {
            const header = document.getElementById('mainHeader');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
        
        // Hero section animation
        function animateHeroSection() {
            const heroSection = document.getElementById('faqHero');
            if (heroSection.getBoundingClientRect().top < window.innerHeight * 0.8) {
                heroSection.classList.add('animate');
            }
        }

        // Footer animation
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
        
        // FAQ item toggle
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            question.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });
        
        // Animations for FAQ sections
        function animateFAQContent() {
            // Animate section title
            const sectionTitle = document.getElementById('sectionTitle');
            const sectionTitleTop = sectionTitle.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            
            if (sectionTitleTop < windowHeight * 0.8) {
                sectionTitle.classList.add('animate');
            }
            
            // Animate categories
            const categories = document.querySelectorAll('.faq-category');
            categories.forEach((category, index) => {
                const categoryTop = category.getBoundingClientRect().top;
                
                if (categoryTop < windowHeight * 0.8) {
                    category.style.transitionDelay = `${index * 0.2}s`;
                    category.classList.add('animate');
                }
            });
            
            // Animate contact promo
            const contactPromo = document.getElementById('contactPromo');
            const promoTop = contactPromo.getBoundingClientRect().top;
            
            if (promoTop < windowHeight * 0.8) {
                contactPromo.classList.add('animate');
            }
        }

        // Initialize on load
        window.addEventListener('load', function() {
            animateHeroSection();
            checkFooterVisibility();
            animateFAQContent();
        });
        
        // Check on scroll
        window.addEventListener('scroll', function() {
            animateHeroSection();
            checkFooterVisibility();
            animateFAQContent();
        });
    </script>
</body>
</html>