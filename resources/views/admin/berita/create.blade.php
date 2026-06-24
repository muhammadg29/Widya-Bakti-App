@extends('dashboard')

@section('content')
<div class="body-wrapper">
    <div class="card-header">
        <h5>{{ isset($berita) ? 'Edit' : 'Tambah' }} Berita</h5>
    </div>
    <div class="card-body">
        <form method="POST" 
            action="{{ isset($berita) ? route('berita.update', $berita->id) : route('berita.store') }}" 
            enctype="multipart/form-data">
            @csrf
            @if(isset($berita))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label class="form-label">Judul Berita</label>
                <input type="text" class="form-control" name="tittle" 
                    value="{{ old('title', $berita->title ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Konten</label>
                <textarea class="form-control" name="content" rows="5" required>{{ old('content', $berita->content ?? '') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Publikasi</label>
                <input type="date" class="form-control" name="publish_date" 
                    value="{{ old('publish_date', isset($berita) ? $berita->publish_date->format('Y-m-d') : now()->format('Y-m-d')) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" class="form-control" name="image" {{ !isset($berita) ? 'required' : '' }}>
                @if(isset($berita) && $berita->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $berita->image) }}" alt="Current image" width="150">
                        <p class="text-muted mt-1">Gambar saat ini</p>
                    </div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">
                {{ isset($berita) ? 'Update' : 'Simpan' }}
            </button>
        </form>
    </div>
</div>
@endsection