@extends('layouts.app')

@section('content')
<style>
    /* Reuse your existing styles from berita.blade.php */
    .berita-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #eef2f5 100%);
        overflow: hidden;
        padding: 80px 0;
    }
    
    .card {
        border-radius: 16px;
        overflow: hidden;
        transition: all 0.4s ease;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        height: 100%;
    }
    
    .card:hover {
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
    }
    
    .card-img-container {
        position: relative;
        overflow: hidden;
        height: 220px;
        background-color: #f8f9fa;
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
    
    .card-title {
        font-size: 1.1rem;
        min-height: 3.2rem;
        color: #0a0a5e;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .card-text {
        font-size: 0.95rem;
        min-height: 4.5rem;
        color: #444;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .pagination {
        margin-top: 40px;
    }
    
    .pagination .page-item .page-link {
        border-radius: 8px;
        margin: 0 5px;
        color: #0a0a5e;
        border: 1px solid #dee2e6;
    }
    
    .pagination .page-item.active .page-link {
        background: #0a0a5e;
        border-color: #0a0a5e;
    }

    /* New styles for pagination info and buttons */
    .pagination-info {
        font-size: 0.9rem;
        color: #555;
        margin-top: 20px;
        text-align: center;
    }
    
    .pagination-controls {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 20px;
    }
    
    .btn-pagination {
        min-width: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .btn-pagination i {
        transition: transform 0.3s ease;
    }
    
    .btn-pagination:hover i {
        transform: translateX(3px);
    }
</style>

<section class="berita-section py-5 position-relative">
    <div class="container">
        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-lg-8">
                <h2 class="section-title mb-1 text-primary fw-bold">Semua Berita</h2>
                <p class="lead text-muted mb-0">Informasi terbaru dari Widya Bakti Press</p>
                <div class="divider mt-2" style="width: 285px; height: 3px; background-color: #0d6efd;"></div>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ url('/') }}" class="btn btn-outline-primary px-4 py-2">
                    <i class="fas fa-home me-2"></i> Kembali ke Beranda
                </a>
            </div>
        </div>

        <div class="row">
            @forelse($beritas as $berita)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                    @if($berita->image)
                    <div class="card-img-container">
                        <img src="{{ $berita->image_url }}" alt="{{ $berita->title }}">
                    </div>
                    @endif
                    
                    <div class="card-body p-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div class="bg-primary text-white px-2 py-1 rounded">
                                <small>{{ $berita->publish_date->format('d M Y') }}</small>
                            </div>
                        </div>

                        <div class="card-text text-muted mt-2 mb-3 flex-grow-1">
                            <h3 class="card-title fw-bold mb-2">
                                {{ $berita->tittle }}
                            </h3>
                            @php
                                $cleanContent = strip_tags($berita->content);
                                $truncated = Str::limit($cleanContent, 120);
                            @endphp
                            {{ $truncated }}
                        </div>
                        
                        <div class="mt-auto">
                            <a href="{{ route('public.berita.show', $berita->id) }}" class="btn btn-sm btn-outline-primary px-3">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info text-center">
                    Belum ada berita yang tersedia.
                </div>
            </div>
            @endforelse
        </div>

        <!-- Pagination -->
        @if($beritas->hasPages())
        <div class="pagination-info">
            Menampilkan {{ $beritas->firstItem() }} - {{ $beritas->lastItem() }} dari {{ $beritas->total() }} Berita
        </div>
        
        <div class="pagination-controls">
            @if($beritas->currentPage() > 1)
                <a href="{{ $beritas->previousPageUrl() }}" class="btn btn-primary btn-pagination">
                    <i class="fas fa-arrow-left me-2"></i> Sebelumnya
                </a>
            @endif
            
            @if($beritas->hasMorePages())
                <a href="{{ $beritas->nextPageUrl() }}" class="btn btn-primary btn-pagination">
                    Selanjutnya <i class="fas fa-arrow-right ms-2"></i>
                </a>
            @endif
        </div>
        @endif
    </div>
</section>
@endsection