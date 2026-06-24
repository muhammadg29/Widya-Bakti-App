<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
/* === BERITA SECTION === */
.berita-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #eef2f5 100%);
    overflow: hidden;
    padding: 80px 0;
}

.berita-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJwYXR0ZXJuIiB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHBhdHRlcm5UcmFuc2Zvcm09InJvdGF0ZSg0NSkiPjxyZWN0IHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgZmlsbD0icmdiYSgwLCAyMCwgMjU1LCAwLjAzKSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3QgZmlsbD0idXJsKCNwYXR0ZXJuKSIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIvPjwvc3ZnPg==');
    opacity: 0.6;
}

.berita-swiper {
    padding: 20px 10px 60px;
    overflow: visible !important;
    position: relative;
}

.swiper-slide {
    height: auto;
    opacity: 0.9;
    transform: scale(0.95);
    transition: all 0.5s ease;
    animation: fadeZoomIn 0.8s ease forwards;
    animation-delay: calc(0.1s * var(--index));
}

.swiper-slide-active {
    opacity: 1;
    transform: scale(1);
    z-index: 2;
}

.swiper-slide:hover {
    transform: translateY(-8px) scale(1.03);
}

/* === ENHANCED CARD DESIGN === */
.card {
    border-radius: 16px;
    overflow: hidden;
    transition: all 0.4s ease;
    height: 100%;
    border: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    background: linear-gradient(145deg, #ffffff, #f5f7fa);
    position: relative;
}

.card:hover {
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    background: #ffffff;
}

.card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(90deg, #0d6efd, #0b5ed7);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.4s ease;
}

.card:hover::before {
    transform: scaleX(1);
}

.card-img-container {
    position: relative;
    overflow: hidden;
    height: 220px;
    background-color: #f8f9fa;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.card-img-container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: transform 0.3s ease;
}

.card:hover .card-img-container img {
    transform: scale(1.05);
}

.card-img-container::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 40%;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.2));
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.card:hover .card-img-container::after {
    opacity: 0.4;
}

.card-date-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);
    color: white;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
    box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    z-index: 2;
}

.card-body {
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    height: calc(100% - 220px);
}

.card-title {
    font-size: 1.15rem;
    min-height: 3.2rem;
    color: #0a0a5e;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    font-weight: 700;
    margin-bottom: 0.8rem;
    position: relative;
    padding-bottom: 0.8rem;
}

.card-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background: #0d6efd;
    border-radius: 2px;
    transition: width 0.3s ease;
}

.card:hover .card-title::after {
    width: 80px;
}

.card-text {
    font-size: 0.95rem;
    color: #555;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    line-height: 1.6;
    margin-bottom: 1.5rem;
    flex-grow: 1;
}

.card-footer {
    background: transparent;
    border: none;
    padding: 0 1.5rem 1.5rem;
}

.btn-berita {
    position: relative;
    overflow: hidden;
    border: 2px solid #0d6efd;
    color: #0d6efd;
    background-color: transparent;
    font-weight: 500;
    padding: 0.4rem 1.2rem;
    border-radius: 30px;
    transition: all 0.3s ease;
    z-index: 1;
}

.btn-berita::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: linear-gradient(90deg, #0d6efd, #0b5ed7);
    transition: width 0.4s ease;
    z-index: -1;
}

.btn-berita:hover {
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
}

.btn-berita:hover::before {
    width: 100%;
}

.btn-berita i {
    margin-left: 5px;
    transition: transform 0.3s ease;
}

.btn-berita:hover i {
    transform: translateX(3px);
}

/* === NAVIGATION BUTTON === */
.berita-prev,
.berita-next {
    width: 48px;
    height: 48px;
    background: #ffffff;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    color: #0d6efd;
    border: 1px solid rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.3s ease;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
}

.berita-prev {
    left: -24px;
}
.berita-next {
    right: -24px;
}

.berita-prev:hover,
.berita-next:hover {
    background-color: #0d6efd;
    color: #fff;
    transform: translateY(-50%) scale(1.1);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}

/* Divider */
.divider {
    opacity: 0.8;
    background-color: #0d6efd;
}

/* Animasi Masuk */
@keyframes fadeZoomIn {
    0% {
        opacity: 0;
        transform: translateY(30px) scale(0.95);
    }
    100% {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .berita-prev,
    .berita-next {
        width: 40px;
        height: 40px;
        left: 5px;
        right: 5px;
    }

    .card-title {
        font-size: 1.05rem;
    }

    .card-text {
        font-size: 0.9rem;
    }
}

.align-button-right {
    display: flex;
    justify-content: flex-end;
}

@media (max-width: 991.98px) {
    .align-button-right {
        justify-content: flex-start;
        margin-top: 1rem;
    }
}
</style>


<section class="berita-section py-5 position-relative" id="berita">
    <div class="container">
        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-lg-8">
                <h2 class="section-title mb-1 text-primary fw-bold">Berita Terkini</h2>
                <p class="lead text-muted mb-0">Informasi terbaru dari Widya Bakti Press</p>
                <div class="divider mt-2" style="width: 285px; height: 3px;"></div>
            </div>
        </div>

        <div class="col-lg-4 align-button-right">
            <a href="{{ route('public.berita.index') }}" class="btn btn-primary px-4 py-2">
                <i class="fas fa-newspaper me-2"></i> Lihat Semua Berita
            </a>
        </div>

        <div class="swiper berita-swiper">
            <div class="swiper-wrapper">
                @foreach($beritas as $berita)
                <div class="swiper-slide">
                    <div class="card h-100 mx-2 d-flex flex-column">
                        @if($berita->image)
                        <div class="card-img-container">
                            <img src="{{ $berita->image_url }}" alt="{{ $berita->tittle }}"
                                class="img-fluid w-100 h-100">
                            <div class="card-date-badge">
                                {{ $berita->publish_date->format('d M Y') }}
                            </div>
                        </div>
                        @endif
                        
                        <div class="card-body">
                            <div class="card-title">
                                {{ $berita->tittle }}
                            </div>
                            
                            <div class="card-text">
                                @php
                                    $cleanContent = strip_tags($berita->content);
                                    $truncated = Str::limit($cleanContent, 120);
                                @endphp
                                {{ $truncated }}
                            </div>
                            
                            <div class="card-footer text-end p-0">
                                <a href="{{ route('public.berita.show', $berita->id) }}" class="btn btn-berita">
                                    Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Panah navigasi -->
            <div class="swiper-button-prev berita-prev">
                <i class="fas fa-arrow-left fs-4"></i>
            </div>
            <div class="swiper-button-next berita-next">
                <i class="fas fa-arrow-right fs-4"></i>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.berita-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.berita-next',
            prevEl: '.berita-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
        },
        on: {
            init: function() {
                this.slides.forEach((slide, index) => {
                    slide.style.setProperty('--index', index);
                });
            }
        }
    });

    const carousel = document.querySelector('.berita-swiper');
    if (carousel) {
        carousel.addEventListener('mouseenter', () => swiper.autoplay.stop());
        carousel.addEventListener('mouseleave', () => swiper.autoplay.start());
    }
});
</script>