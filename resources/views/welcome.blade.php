<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Widya Bakti Press</title>
    <link rel="shortcut icon" href="landing/assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
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
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .btn-primary {
            background-color: #0014ff;
            color: white;
            border: 2px solid #0014ff;
        }
        
        .btn-primary:hover {
            background-color: #0011d9;
            border-color: #000ec2;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 20, 255, 0.3);
        }
        
        .btn-outline {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }
        
        .btn-outline:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 255, 255, 0.1);
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
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #0a0a5e, #0014ff);
            color: white;
            padding: 200px 0 120px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA3KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==');
            opacity: 0.6;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
            animation: fadeInUp 1s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 25px;
            font-weight: 800;
            line-height: 1.2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 35px;
            opacity: 0.9;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }
        
        .whatsapp-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #25D366;
            color: white;
            padding: 14px 28px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
        }
        
        .whatsapp-btn:hover {
            background-color: #128C7E;
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(37, 211, 102, 0.4);
        }
        
        .whatsapp-btn i {
            margin-right: 10px;
            font-size: 1.3rem;
        }

        .btn-hero {
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            color: white;
            padding: 14px 28px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 2px solid rgba(255, 255, 255, 0.5);
            position: relative;
            overflow: hidden;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-hero:hover {
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.8);
            background: rgba(255, 255, 255, 0.1);
        }

        .btn-hero:active {
            transform: translateY(1px);
            box-shadow: 0 2px 10px rgba(255, 255, 255, 0.1);
        }

        .btn-hero i {
            margin-right: 10px;
            font-size: 1.3rem;
            transition: transform 0.3s ease;
        }

        .btn-hero:hover i {
            transform: translateX(5px);
        }
        
        /* Floating Elements Animation */
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 0;
        }
        
        .floating-element {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 15s infinite linear;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            100% {
                transform: translateY(-1000px) rotate(720deg);
            }
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .header-container {
                flex-direction: column;
                padding: 15px;
            }
            
            nav ul {
                margin-top: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav ul li {
                margin: 8px 12px;
            }
            
            .hero {
                padding: 180px 20px 100px;
            }
            
            .hero h1 {
                font-size: 2.3rem;
            }
            
            header.scrolled .header-container {
                padding: 15px;
            }
        }
        
        @media (max-width: 768px) {
            .cta-buttons {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
            
            .dropdown-content {
                min-width: 180px;
            }
            
            .hero {
                padding: 160px 20px 80px;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero p {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .logo-text {
                font-size: 18px;
            }
            
            nav ul li {
                margin: 5px 8px;
            }
            
            .journal-btn {
                padding: 8px 15px;
                font-size: 14px;
            }
        }

        /* Advantages Section */
        .advantages-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #0a0a5e 0%, #0014ff 100%);
        }
        
        .advantages-section .section-title {
            text-align: center;
            font-size: 2.2rem;
            color: #ffffff;
            margin-bottom: 50px;
            position: relative;
            width: 100%;
            display: block;
        }
        
        .advantages-section .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #0a0a5e, #0014ff);
            margin: 15px auto;
            border-radius: 10px;
        }
        
        .cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .advantage-card {
            background: #fff;
            border-radius: 15px;
            width: calc(25% - 20px);
            min-width: 250px;
            padding: 30px 20px;
            text-align: center;
            color: #333;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            opacity: 0;
            transform: translateY(30px);
            border: 1px solid rgba(0, 20, 255, 0.1);
        }
        
        .advantage-card.appear {
            opacity: 1;
            transform: translateY(0);
        }
        
        .card-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0a0a5e 0%, #0014ff 100%);
            border-radius: 50%;
            color: white;
            font-size: 28px;
            transition: all 0.3s ease;
        }
        
        .advantage-card:hover .card-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 8px 20px rgba(10, 10, 94, 0.3);
        }
        
        .advantage-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: #0a0a5e;
        }
        
        .advantage-card p {
            line-height: 1.6;
            color: #555;
            font-size: 0.9rem;
        }
        
        .advantage-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        /* Responsive adjustments */
        @media (max-width: 1100px) {
            .advantage-card {
                width: calc(50% - 20px);
            }
        }
        
        @media (max-width: 600px) {
            .advantage-card {
                width: 100%;
                max-width: 350px;
            }
            
            .advantages-section .section-title {
                font-size: 1.8rem;
            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Journal Types Section */
        .journal-types-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #eef2f5 100%);
            position: relative;
            overflow: hidden;
        }
        
        .journal-types-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgwLCAyMCwgMjU1LCAwLjAzKSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==');
            opacity: 0.6;
        }
        
        .journal-types-section .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: #0a0a5e;
            margin-bottom: 15px;
            font-weight: 700;
            position: relative;
            width: 100%;
            display: block;
        }
        
        .journal-types-section .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(to right, #0a0a5e, #0014ff);
            margin: 15px auto;
            border-radius: 10px;
        }
        
        .journal-types-section .section-subtitle {
            text-align: center;
            color: #555;
            max-width: 700px;
            margin: 0 auto 50px;
            font-size: 1.1rem;
            position: relative;
        }
        
        /* Carousel Container */
        .carousel-container {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 60px;
        }
        
        .carousel {
            display: flex;
            overflow-x: hidden;
            scroll-behavior: smooth;
            padding: 30px 0; 
            gap: 30px;
        }
        
        /* Journal Card */
        .journal-card {
            background: white;
            border-radius: 15px;
            width: 350px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border-top: 4px solid #0014ff;
            position: relative;
            overflow: hidden;
            z-index: 1;
            flex-shrink: 0;
        }
        
        .journal-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(10, 10, 94, 0.03) 0%, rgba(0, 20, 255, 0.03) 100%);
            z-index: -1;
        }
        
        .journal-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0a0a5e 0%, #0014ff 100%);
            border-radius: 50%;
            color: white;
            font-size: 30px;
            transition: all 0.3s ease;
        }
        
        .journal-card:hover .journal-icon {
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 8px 25px rgba(10, 10, 94, 0.3);
        }
        
        .journal-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #0a0a5e;
        }
        
        .journal-points {
            margin-bottom: 20px;
        }
        
        .points-badge {
            background: linear-gradient(135deg, #0a0a5e 0%, #0014ff 100%);
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
        }
        
        .journal-card p {
            line-height: 1.7;
            color: #555;
            margin-bottom: 25px;
            font-size: 1rem;
        }
        
        .journal-learn-more {
            color: #0014ff;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .journal-learn-more i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }
        
        .journal-learn-more:hover {
            color: #0a0a5e;
        }
        
        .journal-learn-more:hover i {
            transform: translateX(5px);
        }
        
        .journal-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        /* Navigation Controls */
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: white;
            border: none;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
            transition: all 0.3s ease;
            opacity: 0.8;
        }
        
        .carousel-btn:hover {
            background: #0a0a5e;
            color: white;
            box-shadow: 0 8px 25px rgba(10, 10, 94, 0.4);
            transform: translateY(-50%) scale(1.1);
            opacity: 1;
        }
        
        .carousel-btn.prev {
            left: 0;
        }
        
        .carousel-btn.next {
            right: 0;
        }
        
        .carousel-dots {
            display: flex;
            justify-content: center;
            margin-top: 40px;
            gap: 10px;
        }
        
        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #bdc3c7;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .dot.active {
            background: #0a0a5e;
            transform: scale(1.3);
        }
        
        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .carousel-container {
                padding: 0 50px;
            }
        }
        
        @media (max-width: 992px) {
            .carousel-container {
                padding: 0 40px;
            }
        }
        
        @media (max-width: 768px) {
            .journal-types-section {
                padding: 60px 0;
            }
            
            .journal-types-section .section-title {
                font-size: 2rem;
            }
            
            .journal-types-section .section-subtitle {
                font-size: 1rem;
                margin-bottom: 40px;
                padding: 0 20px;
            }
            
            .carousel-container {
                padding: 0 40px;
            }
            
            .carousel-btn {
                width: 45px;
                height: 45px;
            }
        }
        
        @media (max-width: 576px) {
            .journal-card {
                width: 300px;
                padding: 30px 20px;
            }
            
            .journal-icon {
                width: 70px;
                height: 70px;
                font-size: 26px;
            }
            
            .journal-card h3 {
                font-size: 1.3rem;
            }
            
            .journal-types-section .section-title {
                font-size: 1.8rem;
            }
            
            .carousel-container {
                padding: 0 35px;
            }
        }

        /* Panitiain.Id Section */
        .panitiain-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #ffffff 0%, #f5f7ff 100%);
            position: relative;
            overflow: hidden;
        }
        
        .panitiain-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgwLCAyMCwgMjU1LCAwLjAzKSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==');
            opacity: 0.3;
        }
        
        .panitiain-content {
            display: flex;
            align-items: center;
            gap: 60px;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }
        
        .panitiain-image-container {
            flex: 1;
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 20, 255, 0.15);
            transform: translateX(-50px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .panitiain-image-container.animate {
            transform: translateX(0);
            opacity: 1;
        }
        
        .panitiain-image {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }
        
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(10, 10, 94, 0.3) 0%, rgba(0, 20, 255, 0.2) 100%);
        }
        
        .panitiain-details {
            flex: 1;
            transform: translateX(50px);
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) 0.2s;
        }
        
        .panitiain-details.animate {
            transform: translateX(0);
            opacity: 1;
        }
        
        .panitiain-title {
            font-size: 1.1rem;
            color: #0014ff;
            margin-bottom: 10px;
            font-weight: 600;
            letter-spacing: 1px;
        }
        
        .panitiain-name {
            font-size: 2.5rem;
            color: #0a0a5e;
            margin-bottom: 20px;
            font-weight: 800;
            line-height: 1.2;
        }
        
        .panitiain-name span {
            color: #0014ff;
        }
        
        .panitiain-description {
            color: #555;
            margin-bottom: 30px;
            line-height: 1.7;
            font-size: 1.1rem;
        }
        
        .panitiain-features {
            margin-bottom: 35px;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            color: #333;
        }
        
        .feature-item i {
            color: #0014ff;
            margin-right: 10px;
            font-size: 1.1rem;
        }
        
        .panitiain-button {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(135deg, #0a0a5e 0%, #0014ff 100%);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 5px 20px rgba(0, 20, 255, 0.3);
        }
        
        .panitiain-button i {
            margin-left: 10px;
            transition: transform 0.3s ease;
        }
        
        .panitiain-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 20, 255, 0.4);
        }
        
        .panitiain-button:hover i {
            transform: translateX(5px);
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .panitiain-content {
                flex-direction: column;
                gap: 40px;
            }
            
            .panitiain-image-container {
                max-width: 500px;
                margin: 0 auto;
            }
            
            .panitiain-details {
                text-align: center;
            }
            
            .panitiain-features {
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }
        
        @media (max-width: 768px) {
            .panitiain-section {
                padding: 70px 0;
            }
            
            .panitiain-name {
                font-size: 2rem;
            }
            
            .panitiain-description {
                font-size: 1rem;
            }
        }

        /* Why Us Section */
      .why-us-section {
          padding: 100px 0;
          background: linear-gradient(135deg, #0a0a5e 0%, #0014ff 100%);
          position: relative;
          overflow: hidden;
      }
      
      .why-us-section::before {
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgyNTUsMjU1LDI1NSwwLjA1KSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==');
          opacity: 0.6;
      }
      
      .sticker-grid {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
          gap: 30px;
          max-width: 1200px;
          margin: 0 auto;
      }
      
      .sticker-card {
          background: rgba(255, 255, 255, 0.95);
          border-radius: 15px;
          padding: 30px;
          display: flex;
          flex-direction: column;
          position: relative;
          overflow: hidden;
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
          transform: scale(0.9) translateY(30px);
          opacity: 0;
          transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
          transition-delay: var(--delay);
          border: 1px solid rgba(255, 255, 255, 0.2);
      }
      
      .sticker-card.animate {
          transform: scale(1) translateY(0);
          opacity: 1;
      }
      
      .sticker-card::before {
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 5px;
          background: linear-gradient(90deg, #0a0a5e, #0014ff);
      }
      
      .sticker-icon {
          width: 60px;
          height: 60px;
          background: linear-gradient(135deg, #0a0a5e 0%, #0014ff 100%);
          border-radius: 15px;
          display: flex;
          align-items: center;
          justify-content: center;
          color: white;
          font-size: 24px;
          margin-bottom: 20px;
          transition: all 0.3s ease;
      }
      
      .sticker-card:hover .sticker-icon {
          transform: rotate(15deg) scale(1.1);
          box-shadow: 0 8px 20px rgba(10, 10, 94, 0.3);
      }
      
      .sticker-content h3 {
          font-size: 1.4rem;
          color: #0a0a5e;
          margin-bottom: 12px;
          font-weight: 700;
      }
      
      .sticker-content p {
          color: #555;
          line-height: 1.6;
          margin-bottom: 20px;
          font-size: 0.95rem;
      }
      
      .sticker-badge {
          align-self: flex-start;
          background: linear-gradient(135deg, #0a0a5e 0%, #0014ff 100%);
          color: white;
          padding: 6px 15px;
          border-radius: 30px;
          font-size: 0.85rem;
          font-weight: 600;
          margin-top: auto;
      }
      
      .sticker-card:hover {
          transform: translateY(-10px) scale(1.02);
          box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
      }
      
      /* Responsive adjustments */
      @media (max-width: 768px) {
          .why-us-section {
              padding: 70px 0;
          }
          
          .sticker-grid {
              grid-template-columns: 1fr;
              gap: 20px;
          }
          
          .sticker-card {
              padding: 25px;
          }
      }

      /* Clients Section */
        .clients-section {
            padding: 100px 0;
            background: white;
            position: relative;
            overflow: hidden;
        }
        
        .clients-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJpbmZvLXBhdHRlcm4iIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgcGF0dGVyblRyYW5zZm9ybT0icm90YXRlKDQ1KSI+PHJlY3Qgd2lkdGg9IjIwIiBoZWlnaHQ9IjIwIiBmaWxsPSJyZ2JhKDAsIDIwLCAyNTUsIDAuMDMpIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCBmaWxsPSJ1cmwoI2luZm8tcGF0dGVybikiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiLz48L3N2Zz4=');
            opacity: 0.05;
        }
        
        /* Section Header */
        .clients-section .section-header {
            text-align: center;
            margin-bottom: 60px;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.6s ease;
        }
        
        .clients-section .section-header.animate {
            transform: translateY(0);
            opacity: 1;
        }
        
        .clients-section .section-title {
            font-size: 2.5rem;
            color: #0a0a5e;
            margin-bottom: 15px;
            font-weight: 700;
            position: relative;
            display: inline-block;
        }
        
        .clients-section .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #0a0a5e, #0014ff);
            margin: 15px auto;
            border-radius: 10px;
        }
        
        .clients-section .section-subtitle {
            color: #555;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        /* Client Carousel - Updated */
        .client-carousel-container {
            width: 100%;
            overflow: hidden;
            position: relative;
            margin-bottom: 80px;
            padding: 30px 0;
        }
        
        .client-carousel-track {
            display: flex;
            gap: 60px;
            width: max-content;
            align-items: center;
            animation: scroll 30s linear infinite;
        }
        
        .client-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 220px;
            height: 120px;
            transition: all 0.3s ease;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .client-logo img {
            height: 100%;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            filter: grayscale(100%) contrast(60%);
            transition: all 0.3s ease;
        }
        
        .client-logo:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        .client-logo:hover img {
            filter: grayscale(0) contrast(100%);
        }
        
        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }
        
        /* Stats Cards */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(0, 20, 255, 0.1);
            transform: translateY(30px);
            opacity: 0;
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .stat-card.animate {
            transform: translateY(0);
            opacity: 1;
        }
        
        .stat-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #0a0a5e 0%, #0014ff 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            flex-shrink: 0;
        }
        
        .stat-content h3 {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .stat-value {
            font-size: 2.2rem;
            font-weight: 700;
            color: #0a0a5e;
            line-height: 1;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .client-logo {
                min-width: 180px;
                height: 100px;
            }
            
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .clients-section {
                padding: 70px 0;
            }
            
            .clients-section .section-title {
                font-size: 2rem;
            }
            
            .clients-section .section-subtitle {
                font-size: 1rem;
                padding: 0 20px;
            }
            
            .client-carousel-track {
                gap: 40px;
            }
            
            .client-logo {
                min-width: 160px;
                height: 90px;
                padding: 15px;
            }
            
            .stat-card {
                padding: 25px;
            }
            
            .stat-icon {
                width: 60px;
                height: 60px;
                font-size: 24px;
            }
            
            .stat-value {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .client-logo {
                min-width: 140px;
                height: 80px;
                padding: 10px;
            }
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
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="floating-elements">
            <div class="floating-element" style="width: 40px; height: 40px; top: 20%; left: 10%; animation-duration: 20s;"></div>
            <div class="floating-element" style="width: 60px; height: 60px; top: 60%; left: 80%; animation-duration: 25s;"></div>
            <div class="floating-element" style="width: 30px; height: 30px; top: 30%; left: 50%; animation-duration: 18s;"></div>
            <div class="floating-element" style="width: 50px; height: 50px; top: 70%; left: 30%; animation-duration: 22s;"></div>
        </div>
        
        <div class="container hero-content">
            <h1>Wujudkan Karya Ilmiah Berkualitas</h1>
            <p>Kami telah menerbitkan ribuan naskah Buku Ajar, Buku Referensi, Buku Monograf, Book Chapter, Jurnal Penelitian Ilmiah hingga Proceeding dalam bentuk buku cetak maupun E-Book.</p>
            
            <div class="cta-buttons">
                <a href="https://wa.me/6285136438305?text=Halo%20Scripta%20Publishing,%20saya%20ingin%20bertanya%20tentang..." class="whatsapp-btn" target="_blank">
                    <i class="fab fa-whatsapp"></i> Hubungi via WhatsApp
                </a>

                <a href="{{ route('ebook') }}" class="btn-hero">
                    <i class></i> Penerbitan E-Book
                </a>

                <a href="{{ route('artikel') }}" class="btn-hero">
                    <i class></i> Penerbitan Artikel Ilmiah
                </a>
            </div>
        </div>
    </section>

    @include('components.landing.section-berita', ['beritas' => $beritas])

    <!-- Keunggulan Kami Section -->
    <section class="advantages-section">
        <div class="container">
            <h2 class="section-title">Keunggulan Kami</h2>
            
            <div class="cards-container">
                <div class="advantage-card">
                    <div class="card-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                    <h3>Branding</h3>
                    <p>Kami membantu memperkuat identitas jurnal Anda agar dikenal luas di komunitas akademik melalui tampilan profesional dan strategi publikasi yang terarah.</p>
                </div>
                
                <div class="advantage-card">
                    <div class="card-icon">
                        <i class="fas fa-pen-fancy"></i>
                    </div>
                    <h3>Creation</h3>
                    <p>Proses penerbitan jurnal yang kami sediakan mendukung setiap tahap: dari penyuntingan, layout, hingga penerbitan digital dengan standar ilmiah yang tinggi.</p>
                </div>
                
                <div class="advantage-card">
                    <div class="card-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Fast Service</h3>
                    <p>Kami menjamin proses yang cepat dan efisien mulai dari submit naskah hingga terbit, tanpa mengorbankan kualitas dan akurasi.</p>
                </div>
                
                <div class="advantage-card">
                    <div class="card-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3>Promotion</h3>
                    <p>Jurnal Anda kami bantu promosikan melalui indexing nasional dan internasional, media sosial, dan jaringan mitra akademik kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Jenis Publikasi Ilmiah Section -->
    <section class="journal-types-section">
        <div class="container">
            <h2 class="section-title">Jenis Publikasi Ilmiah</h2>
            <p class="section-subtitle">Tingkatkan KUM Anda dengan berbagai jenis publikasi ilmiah yang kami sediakan</p>
            
            <div class="carousel-container">
                <button class="carousel-btn prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <div class="carousel">
                    <!-- Card 1: Buku Ajar -->
                    <div class="journal-card">
                        <div class="journal-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3>Buku Ajar</h3>
                        <div class="journal-points">
                            <span class="points-badge">20 Poin KUM</span>
                        </div>
                        <p>Buku ajar sesuai ketentuan di dalam PO PAK memberikan tambahan poin KUM sampai 20 poin.</p>
                        <a href="#" class="journal-learn-more">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <!-- Card 2: Buku Monograf -->
                    <div class="journal-card">
                        <div class="journal-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3>Buku Monograf</h3>
                        <div class="journal-points">
                            <span class="points-badge">20 Poin KUM</span>
                        </div>
                        <p>Buku Monograf memiliki nilai KUM sebesar 20, dan merupakan buku ilmiah dengan pembahasan berfokus pada satu topik.</p>
                        <a href="#" class="journal-learn-more">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                    <!-- Card 3: Buku Referensi -->
                    <div class="journal-card">
                        <div class="journal-icon">
                            <i class="fas fa-bookmark"></i>
                        </div>
                        <h3>Buku Referensi</h3>
                        <div class="journal-points">
                            <span class="points-badge">40 Poin KUM</span>
                        </div>
                        <p>Buku referensi memiliki nilai KUM sebesar 40 poin, karena sifatnya yang mendukung dan melengkapi materi utama.</p>
                        <a href="#" class="journal-learn-more">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 4: Jurnal Sinta -->
                    <div class="journal-card">
                        <div class="journal-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3>Jurnal Bereputasi Terindeks Sinta</h3>
                        <div class="journal-points">
                            <span class="points-badge">10 - 40 Poin KUM</span>
                        </div>
                        <p>Publikasi jurnal Sinta sesuai ketentuan di dalam PO PAK memberikan tambahan poin KUM sampai 10-40 Poin.</p>
                        <a href="#" class="journal-learn-more">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Card 5: Jurnal Internasional -->
                    <div class="journal-card">
                        <div class="journal-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3>Jurnal Internasional Bereputasi</h3>
                        <div class="journal-points">
                            <span class="points-badge">40 Poin KUM</span>
                        </div>
                        <p>Jurnal Internasional Bereputasi klasifikasi dan indeksasi yang diakui oleh Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek) per tahun 2025 memberikan tambahan poin KUM sampai 40 poin.</p>
                        <a href="#" class="journal-learn-more">Pelajari Lebih Lanjut <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
                <button class="carousel-btn next">
                    <i class="fas fa-chevron-right"></i>
                </button>
                
                <div class="carousel-dots">
                    <div class="dot active" data-index="0"></div>
                    <div class="dot" data-index="1"></div>
                    <div class="dot" data-index="2"></div>
                    <div class="dot" data-index="3"></div>
                    <div class="dot" data-index="4"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Panitiain.Id Section -->
    <section class="panitiain-section">
        <div class="container">
            <div class="panitiain-content">
                <div class="panitiain-image-container">
                    <img src="landing/assets/images/panitiain.id-640x640.jpg" alt="Panitiain.Id" class="panitiain-image">
                    <div class="image-overlay"></div>
                </div>
                
                <div class="panitiain-details">
                    <h3 class="panitiain-title">Produk Lain dari Kami</h3>
                    <h2 class="panitiain-name">Panitiain<span>.Id</span></h2>
                    <p class="panitiain-description">Platform profesional untuk manajemen penyelenggaraan seminar, konferensi, dan event akademik secara digital dengan fitur lengkap dan terintegrasi.</p>
                    
                    <div class="panitiain-features">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Sistem Abstract Management</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Peer Review Terintegrasi</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Virtual Conference Tools</span>
                        </div>
                    </div>
                    
                    <a href="https://panitiain.id" target="_blank" class="panitiain-button">
                        Kunjungi Panitiain.Id
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Us Sticker Section -->
    <section class="why-us-section">
        <div class="container">
            
            <div class="sticker-grid">
                <!-- Sticker 1 -->
                <div class="sticker-card" style="--delay: 0.1s">
                    <div class="sticker-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="sticker-content">
                        <h3>Berkualitas</h3>
                        <p>Produk kami memenuhi standar akademik tertinggi dengan proses quality control ketat</p>
                    </div>
                    <div class="sticker-badge">10+ Tahun</div>
                </div>
                
                <!-- Sticker 2 -->
                <div class="sticker-card" style="--delay: 0.2s">
                    <div class="sticker-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="sticker-content">
                        <h3>Tim Profesional</h3>
                        <p>Dikelola oleh akademisi dan praktisi berpengalaman di bidang penerbitan ilmiah</p>
                    </div>
                    <div class="sticker-badge">50+ Spesialis</div>
                </div>
                
                <!-- Sticker 3 -->
                <div class="sticker-card" style="--delay: 0.3s">
                    <div class="sticker-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div class="sticker-content">
                        <h3>Proses Cepat</h3>
                        <p>Waktu penerbitan efisien tanpa mengorbankan kualitas produk akhir</p>
                    </div>
                    <div class="sticker-badge">3-4 Minggu</div>
                </div>
                
                <!-- Sticker 4 -->
                <div class="sticker-card" style="--delay: 0.4s">
                    <div class="sticker-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="sticker-content">
                        <h3>Jaringan Luas</h3>
                        <p>Koneksi dengan berbagai institusi dan indexer nasional/internasional</p>
                    </div>
                    <div class="sticker-badge">100+ Mitra</div>
                </div>
                
                <!-- Sticker 5 -->
                <div class="sticker-card" style="--delay: 0.5s">
                    <div class="sticker-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="sticker-content">
                        <h3>Keamanan Data</h3>
                        <p>Sistem terenkripsi untuk melindungi karya intelektual Anda</p>
                    </div>
                    <div class="sticker-badge">100% Aman</div>
                </div>
                
                <!-- Sticker 6 -->
                <div class="sticker-card" style="--delay: 0.6s">
                    <div class="sticker-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="sticker-content">
                        <h3>Dukungan 24/7</h3>
                        <p>Tim support siap membantu kapan saja melalui berbagai channel</p>
                    </div>
                    <div class="sticker-badge">Respons Cepat</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Clients Section -->
    <section class="clients-section">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header">
                <h2 class="section-title">Klien Kami</h2>
                <p class="section-subtitle">Dipercaya oleh berbagai institusi pendidikan dan penelitian ternama</p>
            </div>
            
            <!-- Client Carousel -->
            <div class="client-carousel-container">
                <div class="client-carousel-track">
                    <!-- Client logos will be duplicated by JavaScript -->
                    <div class="client-logo">
                        <img src="landing/assets/images/1.png" alt="Universitas A">
                    </div>
                    <div class="client-logo">
                        <img src="landing/assets/images/2.png" alt="Institut B">
                    </div>
                    <div class="client-logo">
                        <img src="landing/assets/images/3.png" alt="Politeknik C">
                    </div>
                    <div class="client-logo">
                        <img src="landing/assets/images/4.png" alt="Sekolah Tinggi D">
                    </div>
                    <div class="client-logo">
                        <img src="landing/assets/images/5.png" alt="Lembaga E">
                    </div>
                </div>
            </div>
            
            <!-- Stats Cards -->
            <div class="stats-container">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Publikasi Nasional</h3>
                        <div class="stat-value" data-count="350">0</div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Publikasi Internasional</h3>
                        <div class="stat-value" data-count="22">0</div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Agenda Pelatihan</h3>
                        <div class="stat-value" data-count="5">0</div>
                    </div>
                </div>
                
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <div class="stat-content">
                        <h3>Buku Telah Terbit</h3>
                        <div class="stat-value" data-count="25">0</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <li><a href="https://ojs.ejournalsrc.com/"><i class="fas fa-chevron-right"></i> Portofolio</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Submit Naskah</a></li>
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
        
        // Create more floating elements dynamically
        document.addEventListener('DOMContentLoaded', function() {
            const floatingContainer = document.querySelector('.floating-elements');
            const colors = ['rgba(255, 255, 255, 0.1)', 'rgba(255, 255, 255, 0.15)', 'rgba(255, 255, 255, 0.07)'];
            
            for (let i = 0; i < 8; i++) {
                const size = Math.random() * 50 + 20;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const duration = Math.random() * 15 + 15;
                const delay = Math.random() * 5;
                const color = colors[Math.floor(Math.random() * colors.length)];
                
                const element = document.createElement('div');
                element.className = 'floating-element';
                element.style.width = `${size}px`;
                element.style.height = `${size}px`;
                element.style.top = `${posY}%`;
                element.style.left = `${posX}%`;
                element.style.animationDuration = `${duration}s`;
                element.style.animationDelay = `${delay}s`;
                element.style.background = color;
                
                floatingContainer.appendChild(element);
            }
        });

            // Card scroll animation
        function checkCardVisibility() {
          const cards = document.querySelectorAll('.advantage-card');
            
          cards.forEach(card => {
              const cardTop = card.getBoundingClientRect().top;
              const windowHeight = window.innerHeight;
                
              if (cardTop < windowHeight - 100) {
                  card.classList.add('appear');
              }
          });
        }
        
        // Initialize on load
        window.addEventListener('load', checkCardVisibility);
        
        // Check on scroll
        window.addEventListener('scroll', checkCardVisibility);
        
        // Add hover effect for cards
        const cards = document.querySelectorAll('.advantage-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });
            
            card.addEventListener('mouseleave', function() {
                if (this.classList.contains('appear')) {
                    this.style.transform = 'translateY(0)';
                }
            });
        });

        // Journal cards scroll animation
        function checkJournalCardVisibility() {
            const cards = document.querySelectorAll('.journal-card');
            
            cards.forEach((card, index) => {
                const cardTop = card.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (cardTop < windowHeight - 100) {
                    // Add delay based on index for staggered animation
                    card.style.transitionDelay = `${index * 0.1}s`;
                    card.classList.add('appear');
                }
            });
        }
        
        // Initialize on load
        window.addEventListener('load', checkJournalCardVisibility);
        
        // Check on scroll
        window.addEventListener('scroll', checkJournalCardVisibility);

      // Panitiain section animation
      function checkPanitiainVisibility() {
          const section = document.querySelector('.panitiain-section');
          const imageContainer = document.querySelector('.panitiain-image-container');
          const details = document.querySelector('.panitiain-details');
          
          if (section) {
              const sectionTop = section.getBoundingClientRect().top;
              const windowHeight = window.innerHeight;
              
              if (sectionTop < windowHeight - 200) {
                  imageContainer.classList.add('animate');
                  details.classList.add('animate');
              }
          }
      }
      
      // Initialize on load
      window.addEventListener('load', checkPanitiainVisibility);
      
      // Check on scroll
      window.addEventListener('scroll', checkPanitiainVisibility);

      // Why Us section animation
      function checkWhyUsVisibility() {
          const section = document.querySelector('.why-us-section');
          const header = document.querySelector('.section-header');
          const stickers = document.querySelectorAll('.sticker-card');
          
          if (section) {
              const sectionTop = section.getBoundingClientRect().top;
              const windowHeight = window.innerHeight;
              
              if (sectionTop < windowHeight - 200) {
                  header.classList.add('animate');
                  stickers.forEach(sticker => {
                      sticker.classList.add('animate');
                  });
              }
          }
      }
      
      // Initialize on load
      window.addEventListener('load', checkWhyUsVisibility);
      
      // Check on scroll
      window.addEventListener('scroll', checkWhyUsVisibility);

      // Clients section animation
      let countingTriggered = false;
      
      function checkClientsVisibility() {
          const section = document.querySelector('.clients-section');
          const header = document.querySelector('.clients-section .section-header');
          const stats = document.querySelectorAll('.stat-card');
          
          if (section && !countingTriggered) {
              const sectionTop = section.getBoundingClientRect().top;
              const windowHeight = window.innerHeight;
              
              if (sectionTop < windowHeight - 200) {
                  countingTriggered = true;
                  header.classList.add('animate');
                  stats.forEach((stat, index) => {
                      stat.style.transitionDelay = `${index * 0.1}s`;
                      stat.classList.add('animate');
                      animateValue(stat.querySelector('.stat-value'));
                  });
              }
          }
      }
      
      // Infinite carousel setup
      function setupCarousel() {
          const track = document.querySelector('.client-carousel-track');
          const logos = document.querySelectorAll('.client-logo');
          
          // Duplicate logos for infinite effect
          logos.forEach(logo => {
              const clone = logo.cloneNode(true);
              track.appendChild(clone);
          });
      }
      
      // Animate counting numbers (runs only once)
      function animateValue(element) {
          const target = parseInt(element.getAttribute('data-count'));
          const duration = 2000;
          const start = 0;
          const increment = target / (duration / 16);
          let current = start;
          
          const timer = setInterval(() => {
              current += increment;
              if (current >= target) {
                  clearInterval(timer);
                  current = target;
              }
              element.textContent = Math.floor(current);
          }, 16);
      }
      
      // Initialize on load
      window.addEventListener('load', function() {
          setupCarousel();
          checkClientsVisibility();
      });
      
      // Check on scroll
      window.addEventListener('scroll', checkClientsVisibility);

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
      
      // Initialize on load
      window.addEventListener('load', checkFooterVisibility);
      
      // Check on scroll
      window.addEventListener('scroll', checkFooterVisibility);

      document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.carousel');
            const cards = document.querySelectorAll('.journal-card');
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');
            const dots = document.querySelectorAll('.dot');
            
            let currentIndex = 0;
            const cardWidth = cards[0].offsetWidth + 30; // Width + gap
            
            function updateCarousel() {
                carousel.scrollTo({
                    left: currentIndex * cardWidth,
                    behavior: 'smooth'
                });
                
                // Update dots
                dots.forEach(dot => dot.classList.remove('active'));
                if (dots[currentIndex]) dots[currentIndex].classList.add('active');
            }
            
            // Navigation buttons
            prevBtn.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateCarousel();
                }
            });
            
            nextBtn.addEventListener('click', () => {
                if (currentIndex < cards.length - 1) {
                    currentIndex++;
                    updateCarousel();
                }
            });
            
            // Dot navigation
            dots.forEach(dot => {
                dot.addEventListener('click', () => {
                    const index = parseInt(dot.getAttribute('data-index'));
                    currentIndex = index;
                    updateCarousel();
                });
            });
            
            // Auto scroll for demonstration
            setInterval(() => {
                if (currentIndex < cards.length - 1) {
                    currentIndex++;
                } else {
                    currentIndex = 0;
                }
                updateCarousel();
            }, 5000);
        });
    </script>
</body>
</html>