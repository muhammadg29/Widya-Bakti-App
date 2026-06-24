@extends('dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Berita</h5>
    </div>
    <div class="card-body">
        <div class="mb-4">
            <h3>{{ $berita->tittle }}</h3>
            <p class="text-muted">{{ $berita->publish_date->format('d F Y') }}</p>
        </div>

        @if($berita->image)
        <div class="mb-4">
            <img src="{{ asset('storage/' . $berita->image) }}" alt="Featured image" class="img-fluid rounded">
        </div>
        @endif

        <div class="mb-4">
            {!! $berita->content !!}
        </div>

        <a href="{{ route('berita.index') }}" class="btn btn-secondary">
            <i class="ti ti-arrow-left me-1"></i> Kembali
        </a>
    </div>
</div>
@endsection