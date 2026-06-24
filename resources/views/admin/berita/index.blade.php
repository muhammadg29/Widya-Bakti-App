@extends('layouts.admin')

@section('content')
<style>
    .pagination-info {
        font-size: 0.9rem;
        color: #555;
        margin-bottom: 15px;
        text-align: right;
    }
    
    .pagination-controls {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 20px;
    }
    
    .pagination-buttons {
        display: flex;
        gap: 10px;
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

    /* Modern Table Styling */
    .modern-table {
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }
    
    .modern-table thead {
        background: linear-gradient(90deg, #0a0a5e 0%, #0d6efd 100%);
        color: white;
    }
    
    .modern-table th {
        padding: 16px 20px;
        text-align: left;
        font-weight: 600;
        border-bottom: 2px solid #0d6efd;
    }
    
    .modern-table td {
        padding: 15px 20px;
        border-bottom: 1px solid #f0f4f8;
        vertical-align: middle;
        transition: background-color 0.2s ease;
    }
    
    .modern-table tr:last-child td {
        border-bottom: none;
    }
    
    .modern-table tbody tr:hover td {
        background-color: #f8fbff;
    }
    
    .news-image {
        width: 80px;
        height: 60px;
        border-radius: 8px;
        object-fit: cover;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: 2px solid #eaefff;
    }
    
    .news-image:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }
    
    .action-buttons {
        display: flex;
        gap: 8px;
    }
    
    .btn-action {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    .btn-action:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    }
    
    .btn-edit {
        background: linear-gradient(135deg, #ffd166, #ffb347);
        color: #fff;
    }
    
    .btn-delete {
        background: linear-gradient(135deg, #ff6b6b, #ff8e8e);
        color: #fff;
    }
    
    .title-cell {
        font-weight: 600;
        color: #0a0a5e;
    }
    
    .date-cell {
        color: #6c757d;
        font-size: 0.9rem;
    }
    
    .no-results {
        text-align: center;
        padding: 30px;
        color: #6c757d;
    }
    
    .no-results i {
        font-size: 3rem;
        margin-bottom: 15px;
        color: #e9ecef;
    }
</style>

<div class="body-wrapper">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Berita</h5>
            <a href="{{ route('berita.create') }}" class="btn btn-primary">
                <i class="ti ti-plus me-1"></i> Tambah Berita
            </a>
        </div>
        <div class="card-body">
            <!-- Pagination info -->
            <div class="pagination-info">
                Menampilkan {{ $beritas->firstItem() }} - {{ $beritas->lastItem() }} dari {{ $beritas->total() }} Berita
            </div>
            
            <div class="table-responsive">
                @if($beritas->count() > 0)
                <table class="modern-table">
                    <thead>
                        <tr>
                            <th width="5%">No</th>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Gambar</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($beritas as $berita)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="title-cell">{{ $berita->tittle }}</td>
                            <td class="date-cell">{{ $berita->publish_date->format('d M Y') }}</td>
                            <td>
                                @if($berita->image)
                                <img src="{{ asset('storage/' . $berita->image) }}" alt="Image" class="news-image">
                                @else
                                <div class="text-muted">No Image</div>
                                @endif
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="{{ route('berita.edit', $berita->id) }}" class="btn-action btn-edit">
                                        <i class="ti ti-edit"></i>
                                    </a>
                                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-action btn-delete"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="no-results">
                    <i class="ti ti-news-off"></i>
                    <h4>Tidak Ada Berita</h4>
                    <p>Belum ada berita yang ditambahkan. Mulai dengan menambahkan berita baru.</p>
                </div>
                @endif
            </div>
            
            <!-- Pagination controls -->
            <div class="pagination-controls">
                <div class="pagination-buttons">
                    @if($beritas->currentPage() > 1)
                        <a href="{{ $beritas->previousPageUrl() }}" class="btn btn-outline-primary btn-pagination">
                            <i class="ti ti-arrow-left me-2"></i> Sebelumnya
                        </a>
                    @endif
                </div>
                
                <div>
                    Halaman {{ $beritas->currentPage() }} dari {{ $beritas->lastPage() }}
                </div>
                
                <div class="pagination-buttons">
                    @if($beritas->hasMorePages())
                        <a href="{{ $beritas->nextPageUrl() }}" class="btn btn-primary btn-pagination">
                            Selanjutnya <i class="ti ti-arrow-right ms-2"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection