@extends('layouts.admin')

@section('page_title', 'Dashboard')

@section('content')

<div class="row mb-4">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm" style="border-radius: 8px;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Total Berita</h6>
                        <h2 class="mb-0" style="color: #0066cc; font-weight: 600;">{{ $totalBerita }}</h2>
                    </div>
                    <div style="font-size: 48px; color: #0066cc; opacity: 0.2;">
                        <i class="bi bi-newspaper"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card border-0 shadow-sm" style="border-radius: 8px;">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-2">Total Pengumuman</h6>
                        <h2 class="mb-0" style="color: #28a745; font-weight: 600;">{{ $totalPengumuman }}</h2>
                    </div>
                    <div style="font-size: 48px; color: #28a745; opacity: 0.2;">
                        <i class="bi bi-megaphone"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <h3 class="mb-3" style="color: #333; font-weight: 600;">Berita Terbaru</h3>
        <div class="card border-0 shadow-sm" style="border-radius: 8px;">
            <div class="card-body p-4">
                @if($beritaTerbaru->count() > 0)
                    <div class="list-group list-group-flush">
                        @foreach($beritaTerbaru as $item)
                            <a href="{{ route('berita.show', $item->id) }}" class="list-group-item list-group-item-action border-0 px-0 py-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1" style="color: #333;">{{ $item->judul }}</h6>
                                        <small class="text-muted">{{ $item->created_at->format('d M Y') }}</small>
                                    </div>
                                    <i class="bi bi-chevron-right text-muted"></i>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <p class="text-muted text-center py-4">Belum ada berita</p>
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <h3 class="mb-3" style="color: #333; font-weight: 600;">Pengumuman Terbaru</h3>
        <div class="card border-0 shadow-sm" style="border-radius: 8px;">
            <div class="card-body p-4">
                @if($pengumumanTerbaru->count() > 0)
                    <div class="list-group list-group-flush">
                        @foreach($pengumumanTerbaru as $item)
                            <a href="{{ route('pengumuman.show', $item->id) }}" class="list-group-item list-group-item-action border-0 px-0 py-3">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <h6 class="mb-1" style="color: #333;">{{ $item->judul }}</h6>
                                        <small class="text-muted">{{ $item->tanggal->format('d M Y') }}</small>
                                    </div>
                                    <i class="bi bi-chevron-right text-muted"></i>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <p class="text-muted text-center py-4">Belum ada pengumuman</p>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
