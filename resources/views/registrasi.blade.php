<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Publikasi - Widya Bakti Press</title>
    <link rel="shortcut icon" href="landing/assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* === BASE STYLES === */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        :root {
            --primary: #0a0a5e;
            --secondary: #0d6efd;
            --accent: #ff6b00;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #28a745;
        }
        
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #eef2f5 100%);
            color: #333;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgwLCAyMCwgMjU1LCAwLjAzKSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==');
            opacity: 0.6;
            z-index: -1;
        }
        
        /* === REGISTRATION FORM === */
        .registration-container {
            max-width: 1000px;
            margin: 60px auto 100px;
            display: flex;
            flex-direction: column;
        }
        
        .form-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.15);
            position: relative;
            overflow: hidden;
        }
        
        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 8px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
        }
        
        .form-header {
            text-align: center;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 30px;
            position: relative;
        }
        
        .form-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .form-subtitle {
            opacity: 0.9;
            font-size: 1.1rem;
        }
        
        .form-body {
            padding: 40px;
        }
        
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .form-label {
            display: block;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 8px;
            font-size: 0.95rem;
        }
        
        .form-input {
            width: 100%;
            padding: 15px 20px 15px 50px;
            border: 2px solid #e1e5ee;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s;
            background: #f8f9fa;
        }
        
        .form-input:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
            background: white;
            outline: none;
        }
        
        .form-icon {
            position: absolute;
            left: 20px;
            top: 44px;
            color: var(--secondary);
            font-size: 18px;
        }
        
        .form-textarea {
            height: 120px;
            resize: vertical;
            padding: 15px 20px;
        }
        
        .form-select {
            padding: 15px 20px 15px 50px;
            background: #f8f9fa;
            border: 2px solid #e1e5ee;
            border-radius: 12px;
            font-size: 16px;
            width: 100%;
        }
        
        .form-select:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
            background: white;
            outline: none;
        }
        
        .form-check {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }
        
        .form-check-input {
            margin-right: 10px;
            margin-top: 5px;
        }
        
        .form-check-label {
            color: #555;
            font-size: 0.95rem;
        }
        
        .form-check-label a {
            color: var(--secondary);
            text-decoration: none;
            font-weight: 500;
        }
        
        .form-check-label a:hover {
            text-decoration: underline;
        }
        
        .submit-btn {
            width: 100%;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 16px;
            font-size: 18px;
            font-weight: 600;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.4);
        }
        
        .submit-btn i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        
        .submit-btn:hover i {
            transform: translateX(5px);
        }
        
        /* === FEATURES SECTION === */
        .features-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 40px;
        }
        
        .feature-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            text-align: center;
            border-top: 4px solid var(--secondary);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 28px;
            color: white;
        }
        
        .feature-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 15px;
        }
        
        .feature-description {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.6;
        }
        
        /* === SUCCESS MESSAGE === */
        .success-message {
            background: var(--success);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            animation: fadeInUp 0.5s ease;
        }
        
        .success-message i {
            font-size: 24px;
            margin-right: 15px;
        }
        
        .success-message p {
            margin: 0;
            font-weight: 500;
        }
        
        /* === RESPONSIVE DESIGN === */
        @media (max-width: 992px) {
            .features-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .form-body {
                padding: 30px 20px;
            }
            
            .features-container {
                grid-template-columns: 1fr;
            }
            
            .form-title {
                font-size: 1.7rem;
            }
            
            .form-group {
                grid-column: span 2 !important;
            }
        }
        
        @media (max-width: 576px) {
            .form-header {
                padding: 20px 15px;
            }
            
            .form-title {
                font-size: 1.5rem;
            }
        }
        
        /* === ANIMATIONS === */
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
        
        .animated {
            animation: fadeInUp 0.8s ease forwards;
        }
        
        .delay-1 {
            animation-delay: 0.1s;
        }
        
        .delay-2 {
            animation-delay: 0.2s;
        }
        
        .delay-3 {
            animation-delay: 0.3s;
        }
        
        .delay-4 {
            animation-delay: 0.4s;
        }
        
        /* GRID STYLES */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        /* === BACK BUTTON === */
        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 8px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
        }
        
        .back-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateX(-3px);
        }
        
        .back-button i {
            transition: transform 0.3s ease;
        }
        
        .back-button:hover i {
            transform: translateX(-3px);
        }
    </style>
</head>
<body>
    <!-- Registration Form -->
    <div class="registration-container">
        <div class="form-container animated">
            <div class="form-header">
                <!-- Back Button -->
                <a href="{{ url('/') }}" class="back-button">
                    <i class="fas fa-arrow-left"></i>
                </a>
                
                <h2 class="form-title">Formulir Pendaftaran Publikasi</h2>
                <p class="form-subtitle">Isi formulir di bawah ini untuk mendaftar</p>
            </div>
            
            <div class="form-body">
                
                <!-- Session Success Message -->
                <div class="success-message" style="display: none;" id="sessionSuccess">
                    <i class="fas fa-check-circle"></i>
                    <p id="sessionMessage"></p>
                </div>
                
                <form id="registrationForm" method="POST" action="{{ route('public.registration.store') }}">
                    @csrf
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <i class="form-icon fas fa-user"></i>
                            <input type="text" id="nama" name="nama" class="form-input" placeholder="Masukkan nama lengkap" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <i class="form-icon fas fa-envelope"></i>
                            <input type="email" id="email" name="email" class="form-input" placeholder="Masukkan email valid" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="afiliasi" class="form-label">Afiliasi / Institusi</label>
                            <i class="form-icon fas fa-university"></i>
                            <input type="text" id="afiliasi" name="afiliasi" class="form-input" placeholder="Nama institusi" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="telepon" class="form-label">Nomor Telepon</label>
                            <i class="form-icon fas fa-phone"></i>
                            <input type="tel" id="telepon" name="telepon" class="form-input" placeholder="Nomor telepon aktif" required>
                        </div>
                        
                        <div class="form-group" style="grid-column: span 2;">
                            <label for="kebutuhan" class="form-label">Kebutuhan Publikasi</label>
                            <i class="form-icon fas fa-book-open"></i>
                            <select id="kebutuhan" name="kebutuhan" class="form-select" required>
                                <option value="" disabled selected>Pilih jenis publikasi</option>
                                <option value="Buku">Publikasi Buku</option>
                                <option value="Sinta 3">Jurnal Sinta 3</option>
                                <option value="Scopus Q3">Jurnal Scopus Q3</option>
                                <option value="Scopus Q2">Jurnal Scopus Q2</option>
                                <option value="Prosiding">Prosiding Seminar</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        
                        <div class="form-group" style="grid-column: span 2;">
                            <label for="deskripsi" class="form-label">Deskripsi Kebutuhan</label>
                            <textarea id="deskripsi" name="deskripsi" class="form-input form-textarea" placeholder="Deskripsikan kebutuhan publikasi Anda secara detail"></textarea>
                        </div>
                        
                        <div class="form-check" style="grid-column: span 2;">
                            <input type="checkbox" id="persetujuan" name="persetujuan" required>
                            <label for="persetujuan" class="form-check-label">
                                Saya menyetujui <a href="#" class="text-primary">syarat dan ketentuan</a> yang berlaku
                            </label>
                        </div>
                        
                        <div style="grid-column: span 2;">
                            <button type="submit" class="submit-btn">
                                Kirim Pendaftaran <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Handle session success message
        document.addEventListener('DOMContentLoaded', function() {
            const sessionSuccess = document.getElementById('sessionSuccess');
            const sessionMessage = document.getElementById('sessionMessage');
            
            // Check if there's a session success message
            const successMessage = "{{ session('success') }}";
            
            if (successMessage) {
                sessionMessage.textContent = successMessage;
                sessionSuccess.style.display = 'flex';
                
                // Scroll to success message
                sessionSuccess.scrollIntoView({ 
                    behavior: 'smooth' 
                });
            }
            
            // Form submission simulation
            document.getElementById('registrationForm').addEventListener('submit', function(e) {
                // In a real implementation, this would be handled by the server
                // Here we're just showing a success message for demo purposes
                const successMessage = document.querySelector('.success-message');
                successMessage.style.display = 'flex';
                
                // Scroll to success message
                successMessage.scrollIntoView({ 
                    behavior: 'smooth' 
                });
            });
            
            // Animate elements on scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animated');
                    }
                });
            }, {
                threshold: 0.1
            });
            
            document.querySelectorAll('.feature-card').forEach(card => {
                observer.observe(card);
            });
        });
    </script>
</body>
</html>