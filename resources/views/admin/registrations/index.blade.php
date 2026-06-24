@extends('layouts.admin')

@section('content')
<style>
    .pagination-info {
        font-size: 0.9rem;
        color: #ffffff;
        margin-bottom: 15px;
        text-align: right;
    }
    
    .card-dashboard {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        border: none;
        transition: all 0.3s;
    }
    
    .card-header-dashboard {
        background: linear-gradient(90deg, #0a0a5e 0%, #0d6efd 100%);
        color: white;
        padding: 15px 20px;
        font-weight: 600;
    }
    
    .table th {
        background: #f8f9fa;
        color: #0a0a5e;
        font-weight: 600;
        padding: 15px;
    }
    
    .table td {
        padding: 12px 15px;
        vertical-align: middle;
    }
    
    .status-badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        display: inline-block;
        min-width: 80px;
        text-align: center;
    }
    
    .status-pending {
        background: #fff3cd;
        color: #856404;
    }
    
    .status-approved {
        background: #d4edda;
        color: #155724;
    }
    
    .status-rejected {
        background: #f8d7da;
        color: #721c24;
    }
    
    .action-btn {
        width: 36px;
        height: 36px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin: 0 3px;
        transition: all 0.3s ease;
    }
    
    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    }
    
    .btn-success-light {
        background: #d4edda;
        color: #155724;
    }
    
    .btn-danger-light {
        background: #f8d7da;
        color: #721c24;
    }
    
    .mb-0 {
        color: #ffffff;
    }
    
    .status-controls {
        display: flex;
        gap: 5px;
        margin-top: 5px;
    }
    
    .status-btn {
        padding: 4px 10px;
        border-radius: 15px;
        font-size: 12px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
    }
    
    .status-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 3px 8px rgba(0,0,0,0.2);
    }
    
    .status-btn.approve-btn {
        background: #28a745;
        color: white;
    }
    
    .status-btn.reject-btn {
        background: #dc3545;
        color: white;
    }
    
    .action-buttons {
        display: flex;
        gap: 5px;
    }
    
    .status-form {
        display: inline;
    }
</style>

<div class="body-wrapper">
    <!-- Flash Messages -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="card-dashboard">
        <div class="card-header-dashboard d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Pendaftar</h5>
            <div class="pagination-info">
                Menampilkan {{ $registrations->firstItem() }} - {{ $registrations->lastItem() }} dari {{ $registrations->total() }} Pendaftar
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor</th>
                            <th>Institusi</th>
                            <th>Kebutuhan</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registrations as $registration)
                        <tr>
                            <td>{{ $loop->iteration + ($registrations->currentPage() - 1) * $registrations->perPage() }}</td>
                            <td>{{ $registration->nama }}</td>
                            <td>{{ $registration->email }}</td>
                            <td>{{ $registration->telepon }}</td>
                            <td>{{ $registration->afiliasi }}</td>
                            <td>{{ $registration->kebutuhan }}</td>
                            <td>{{ $registration->created_at->format('d M Y') }}</td>
                            <td>
                                <span class="status-badge status-{{ $registration->status === 'pending' ? 'pending' : $registration->status }}">
                                    {{ $registration->status === 'pending' ? 'Pending Approve' : ucfirst($registration->status) }}
                                </span>
                                <div class="status-controls">
                                    <form action="{{ route('admin.registrations.status', $registration->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="approved">
                                        <button type="submit" class="btn btn-sm btn-success status-btn"
                                            onclick="return confirm('Approve pendaftaran ini?')">
                                            Approve
                                        </button>
                                    </form>
                                    <form action="{{ route('admin.registrations.status', $registration->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="rejected">
                                        <button type="submit" class="btn btn-sm btn-danger status-btn"
                                            onclick="return confirm('Reject pendaftaran ini?')">
                                            Reject
                                        </button>
                                    </form>
                                </div>
                            </td>
                            <td>
                                <form action="{{ route('admin.registrations.destroy', $registration->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus pendaftaran ini?')">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $registrations->links() }}
            </div>
        </div>
    </div>
</div>
@endsection