@extends('frontend.layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <!-- Detail Card -->
            <div class="card border-0 shadow-sm" style="border-radius: 8px;">
                <div class="card-body p-4">
                    @if($berita->image)
                        <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->judul }}" 
                             style="width: 100%; max-height: 400px; object-fit: cover; border-radius: 4px; margin-bottom: 20px;">
                    @endif

                    <h2 class="mb-3" style="color: #333; font-weight: 600;">{{ $berita->judul }}</h2>
                    
                    <div class="mb-3">
                        <small class="text-muted">
                            <strong>Dibuat:</strong> {{ $berita->created_at->format('d F Y H:i') }}
                        </small>
                    </div>

                    <hr>

                    <div class="mb-4">
                        <p style="color: #555; line-height: 1.6;">{{ $berita->deskripsi }}</p>
                    </div>

                    @if($berita->file)
                        <div class="mb-4">
                            <a href="{{ asset('storage/' . $berita->file) }}" target="_blank" class="btn btn-info">
                                <i class="bi bi-download"></i> Download Dokumen
                            </a>
                        </div>
                    @endif

                    <div class="d-flex gap-2">
                        <a href="{{ route('berita.edit', $berita->id) }}" 
                           class="btn btn-sm" style="background-color: #28a745; color: white; padding: 8px 15px;">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('berita.destroy', $berita->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm" style="background-color: #dc3545; color: white; padding: 8px 15px;" 
                                    onclick="return confirm('Apakah Anda yakin?')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                        <a href="{{ route('berita.index') }}" 
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
