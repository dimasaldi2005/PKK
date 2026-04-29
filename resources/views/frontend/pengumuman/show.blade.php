@extends('frontend.layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <!-- Detail Card -->
            <div class="card border-0 shadow-sm" style="border-radius: 8px;">
                <div class="card-body p-4">
                    <h2 class="mb-3" style="color: #333; font-weight: 600;">{{ $pengumuman->judul }}</h2>
                    
                    <div class="mb-3">
                        <small class="text-muted">
                            <strong>Tanggal:</strong> {{ $pengumuman->tanggal->format('d F Y') }}
                        </small>
                    </div>

                    <div class="mb-3">
                        <small class="text-muted">
                            <strong>Tempat:</strong> {{ $pengumuman->tempat }}
                        </small>
                    </div>

                    <hr>

                    <div class="mb-4">
                        <p style="color: #555; line-height: 1.6;">{{ $pengumuman->deskripsi }}</p>
                    </div>

                    <div class="d-flex gap-2">
                        <a href="{{ route('pengumuman.edit', $pengumuman->id) }}" 
                           class="btn btn-sm" style="background-color: #28a745; color: white; padding: 8px 15px;">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('pengumuman.destroy', $pengumuman->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm" style="background-color: #dc3545; color: white; padding: 8px 15px;" 
                                    onclick="return confirm('Apakah Anda yakin?')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                        <a href="{{ route('pengumuman.index') }}" 
                           class="btn btn-sm" style="background-color: #6c757d; color: white; padding: 8px 15px;">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
