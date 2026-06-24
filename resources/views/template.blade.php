<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template - Widya Bakti Press</title>
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
      
        /* Template Page Hero Section */
        .template-hero {
            background: linear-gradient(135deg, #0a0a5e, #0014ff);
            color: white;
            padding: 160px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .template-hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA3KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==');
            opacity: 0.3;
        }
        
        .template-hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        
        .template-hero.animate .template-hero-content {
            opacity: 1;
            transform: translateY(0);
        }
        
        .template-hero h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            font-weight: 800;
            line-height: 1.2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        
        .template-hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        /* Template Section Styles */
        .template-section {
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
        
        .template-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 40px;
            margin-bottom: 60px;
        }
        
        .template-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 40px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            z-index: 1;
            opacity: 0;
            transform: translateY(30px);
            max-width: 500px;
            width: 100%;
        }
        
        .template-card.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        .template-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, #0a0a5e, #0014ff);
            z-index: -1;
            transition: height 0.3s ease;
        }
        
        .template-card:hover::before {
            height: 100%;
        }
        
        .template-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 20, 255, 0.2);
        }
        
        .template-card:hover .card-icon {
            background: white;
            color: #0014ff;
            border-color: rgba(255, 255, 255, 0.2);
            transform: scale(1.1) rotate(5deg);
        }
        
        .template-card:hover h3,
        .template-card:hover p {
            color: white;
        }
        
        .template-card:hover .template-download-btn {
            background: white;
            color: #0014ff;
        }
        
        .card-icon {
            width: 100px;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            background: rgba(10, 10, 94, 0.05);
            color: #0a0a5e;
            border-radius: 20px;
            font-size: 48px;
            border: 2px solid rgba(10, 10, 94, 0.1);
            transition: all 0.5s ease;
        }
        
        .template-card h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: #0a0a5e;
            transition: color 0.3s ease;
        }
        
        .template-card p {
            color: #555;
            margin-bottom: 25px;
            transition: color 0.3s ease;
            line-height: 1.7;
        }
        
        .template-features {
            text-align: left;
            margin-bottom: 30px;
            padding: 0 20px;
            transition: color 0.3s ease;
        }
        
        .template-features li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
            color: #555;
            transition: color 0.3s ease;
        }
        
        .template-features i {
            color: #0014ff;
            margin-right: 10px;
            margin-top: 5px;
            transition: color 0.3s ease;
        }
        
        .template-card:hover .template-features li,
        .template-card:hover .template-features i {
            color: white;
        }
        
        .template-download-btn {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(to right, #0a0a5e, #0014ff);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 20, 255, 0.2);
        }
        
        .template-download-btn i {
            margin-right: 10px;
            transition: transform 0.3s ease;
        }
        
        .template-download-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 20, 255, 0.3);
        }
        
        .template-download-btn:hover i {
            transform: translateY(-3px);
        }
        
        /* Template Info Section */
        .template-info {
            background: linear-gradient(135deg, #f0f4ff, #e6ebff);
            border-radius: 15px;
            padding: 40px;
            margin-top: 60px;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }
        
        .template-info.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        .template-info h3 {
            font-size: 1.8rem;
            color: #0a0a5e;
            margin-bottom: 25px;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
        }
        
        .template-info h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, #0a0a5e, #0014ff);
            border-radius: 3px;
        }
        
        .template-info p {
            color: #555;
            margin-bottom: 20px;
            line-height: 1.8;
        }
        
        .template-info ul {
            list-style-type: none;
            padding-left: 0;
        }
        
        .template-info li {
            padding: 10px 0 10px 30px;
            position: relative;
            margin-bottom: 10px;
            color: #555;
        }
        
        .template-info li::before {
            content: '\f00c';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 10px;
            color: #0014ff;
        }
        
        /* File Preview Section */
        .file-preview {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
            flex-wrap: wrap;
        }
        
        .file-preview-item {
            text-align: center;
            max-width: 300px;
        }
        
        .file-preview-icon {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #0a0a5e, #0014ff);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 48px;
            transition: all 0.3s ease;
        }
        
        .file-preview-icon:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 20, 255, 0.3);
        }
        
        .file-preview-item p {
            font-weight: 600;
            color: #0a0a5e;
        }
        
        /* File Error Notice */
        .file-error-notice {
            background-color: #ffecec;
            border: 1px solid #ffb1b1;
            border-radius: 8px;
            padding: 15px;
            margin: 20px auto;
            max-width: 600px;
            text-align: center;
            color: #d32f2f;
            display: none;
        }
        
        .file-error-notice i {
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
            
            .template-container {
                flex-direction: column;
                align-items: center;
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
            
            .template-card {
                padding: 30px 20px;
            }
            
            .template-hero h1 {
                font-size: 2.3rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .file-preview {
                flex-direction: column;
                align-items: center;
            }
        }
        
        @media (max-width: 480px) {
            .template-info {
                padding: 30px 20px;
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
                            <a href="{{ route('template') }}" class="active">Template</a>
                            <a href="{{ route('faq') }}">FAQ</a>
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

    <!-- Template Hero Section -->
    <section class="template-hero" id="templateHero">
        <div class="template-hero-content">
            <h1>Template Naskah Akademik</h1>
            <p>Download template yang telah disesuaikan dengan standar akademik untuk mempermudah proses penulisan dan penerbitan karya ilmiah Anda</p>
        </div>
    </section>

    <!-- Template Section -->
    <section class="template-section">
        <div class="container">
            <div class="section-title" id="sectionTitle">
                <h2>Pilih Template yang Anda Butuhkan</h2>
                <p>Kami menyediakan template profesional untuk berbagai jenis publikasi akademik</p>
            </div>
            
            <!-- File Error Notice -->
            <div class="file-error-notice" id="fileError">
                <i class="fas fa-exclamation-triangle"></i>
                <strong>Perhatian:</strong> File template tidak ditemukan. Pastikan file berada di lokasi yang benar.
            </div>
            
            <div class="template-container">
                <!-- Template Card 1 -->
                <div class="template-card" id="template1">
                    <div class="card-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Template Buku Scripta Publisher</h3>
                    <p>Template khusus untuk penulisan buku ajar dengan format standar akademik yang profesional dan mudah digunakan.</p>
                    
                    <ul class="template-features">
                        <li><i class="fas fa-check-circle"></i> Format sesuai standar ISBN</li>
                        <li><i class="fas fa-check-circle"></i> Struktur bab yang terorganisir</li>
                        <li><i class="fas fa-check-circle"></i> Tampilan profesional untuk referensi</li>
                        <li><i class="fas fa-check-circle"></i> Panduan penulisan terlampir</li>
                        <li><i class="fas fa-check-circle"></i> Kompatibel dengan MS Word</li>
                    </ul>
                    
                    <a href="/landing/assets/templates/Template_Buku_Scripta_Publisher.docx" class="template-download-btn" id="downloadBookBtn">
                        <i class="fas fa-download"></i> Download Template
                    </a>
                </div>
                
                <!-- Template Card 2 -->
                <div class="template-card" id="template2">
                    <div class="card-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Template Estungkara Law Review</h3>
                    <p>Template khusus untuk penulisan artikel jurnal hukum Estungkara Law Review dengan format standar akademik yang profesional.</p>
                    
                    <ul class="template-features">
                        <li><i class="fas fa-check-circle"></i> Format khusus jurnal hukum</li>
                        <li><i class="fas fa-check-circle"></i> Struktur artikel sesuai standar ILRC</li>
                        <li><i class="fas fa-check-circle"></i> Pengaturan sitasi hukum otomatis</li>
                        <li><i class="fas fa-check-circle"></i> Panduan penulisan artikel hukum</li>
                        <li><i class="fas fa-check-circle"></i> Kompatibel dengan reference manager</li>
                    </ul>
                    
                    <a href="/landing/assets/templates/Template_Estungkara_Law_Review.docx" class="template-download-btn" id="downloadJournalBtn">
                        <i class="fas fa-download"></i> Download Template
                    </a>
                </div>
            </div>
            
            <!-- Template Information -->
            <div class="template-info" id="templateInfo">
                <h3>Panduan Penggunaan Template</h3>
                <p>Untuk memastikan karya ilmiah Anda memenuhi standar penerbitan Widya Bakti Press, silakan ikuti panduan berikut:</p>
                
                <ul>
                    <li>Download template yang sesuai dengan jenis karya ilmiah Anda</li>
                    <li>Baca petunjuk penggunaan yang terdapat dalam file template</li>
                    <li>Jangan mengubah format dasar template (font, margin, heading styles)</li>
                    <li>Gunakan fitur Styles di MS Word untuk konsistensi format</li>
                    <li>Pastikan semua bagian template telah diisi dengan benar sebelum submit</li>
                    <li>Simpan dokumen dengan format .docx untuk mempertahankan format</li>
                    <li>Untuk pertanyaan teknis, hubungi tim support kami di support@widya-bakti.id</li>
                </ul>
                
                <p style="margin-top: 20px; font-style: italic;">Template kami dirancang untuk memudahkan proses penulisan sekaligus memastikan kualitas format yang konsisten dan profesional. Kami terus memperbarui template untuk mengikuti perkembangan standar akademik terbaru.</p>
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
            const heroSection = document.getElementById('templateHero');
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
        
        // Template cards animation
        function animateTemplateCards() {
            const templateCards = document.querySelectorAll('.template-card');
            const section = document.querySelector('.template-section');
            
            if (section) {
                const sectionTop = section.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (sectionTop < windowHeight * 0.8) {
                    templateCards.forEach((card, index) => {
                        card.style.transitionDelay = `${index * 0.2}s`;
                        card.classList.add('animate');
                    });
                    
                    // Also animate the section title
                    const sectionTitle = document.getElementById('sectionTitle');
                    sectionTitle.classList.add('animate');
                    
                    // Animate the info section
                    const templateInfo = document.getElementById('templateInfo');
                    setTimeout(() => {
                        templateInfo.classList.add('animate');
                    }, 300);
                }
            }
        }
        
        // File validation and download
        async function checkFileExists(url) {
            try {
                const response = await fetch(url, { method: 'HEAD' });
                return response.ok;
            } catch (error) {
                return false;
            }
        }
        
        async function downloadFile(fileName, filePath) {
            // Check if file exists
            const fileExists = await checkFileExists(filePath);
            
            if (!fileExists) {
                document.getElementById('fileError').style.display = 'block';
                return;
            }
            
            // Create a temporary link
            const link = document.createElement('a');
            link.style.display = 'none';
            document.body.appendChild(link);
            
            // Set the download attributes
            link.href = filePath;
            link.download = fileName;
            
            // Trigger the download
            link.click();
            
            // Clean up
            document.body.removeChild(link);
            
            // Show download success message
            const downloadBtn = event.target.closest('.template-download-btn');
            const originalHtml = downloadBtn.innerHTML;
            
            downloadBtn.innerHTML = '<i class="fas fa-check"></i> Berhasil Diunduh!';
            downloadBtn.style.background = '#4BB543';
            
            setTimeout(() => {
                downloadBtn.innerHTML = originalHtml;
                downloadBtn.style.background = '';
            }, 2000);
        }
        
        // Setup download buttons
        document.getElementById('downloadBookBtn').addEventListener('click', function(e) {
            e.preventDefault();
            downloadFile(
                'Template_Buku_Scripta_Publisher',
                'landing/assets/templates/Template_Buku_Scripta_Publisher.docx'
            );
        });
        
        document.getElementById('downloadJournalBtn').addEventListener('click', function(e) {
            e.preventDefault();
            downloadFile(
                'Template_Estungkara_Law_Review',
                'landing/assets/templates/Template_Estungkara_Law_Review.docx'
            );
        });

        // Initialize on load
        window.addEventListener('load', function() {
            animateHeroSection();
            checkFooterVisibility();
            animateTemplateCards();
        });
        
        // Check on scroll
        window.addEventListener('scroll', function() {
            animateHeroSection();
            checkFooterVisibility();
            animateTemplateCards();
        });
    </script>
</body>
</html>