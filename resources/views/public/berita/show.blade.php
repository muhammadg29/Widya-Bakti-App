@extends('layouts.app')

@section('content')
<style>
    .news-detail-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #eef2f5 100%);
    }
    
    .article-header {
        margin-bottom: 40px;
    }
    
    .article-title {
        color: #0a0a5e;
        margin-bottom: 20px;
    }
    
    .article-meta {
        color: #666;
        font-size: 1.1rem;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid #0d6efd;
    }
    
    .article-image {
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 30px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .article-content {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #444;
    }
    
    .article-content p {
        margin-bottom: 1.5rem;
    }
    
    .article-content img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin: 20px 0;
    }
    
    .back-button {
        margin-top: 40px;
        display: inline-flex;
        align-items: center;
    }
</style>

<section class="news-detail-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="article-header">
                    <h1 class="article-title fw-bold">{{ $berita->tittle }}</h1>
                    <div class="article-meta">
                        <span class="publish-date me-3">
                            <i class="fas fa-calendar me-2"></i>
                            {{ $berita->publish_date->format('d M Y') }}
                        </span>
                        <span class="author">
                            <i class="fas fa-user me-2"></i>
                            {{ $berita->author ?? 'Admin' }}
                        </span>
                    </div>
                </div>

                @if($berita->image)
                <div class="article-image">
                    <img src="{{ $berita->image_url }}" alt="{{ $berita->title }}" class="img-fluid w-100">
                </div>
                @endif

                <div class="article-content">
                    {!! $berita->content !!}
                </div>

                <a href="{{ route('public.berita.index') }}" class="btn btn-primary back-button">
                    <i class="fas fa-arrow-left me-2"></i> Kembali ke Berita
                </a>
            </div>
        </div>
    </div>
</section>
@endsection