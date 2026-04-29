@extends('layouts.admin')

@section('page_title', 'Tambahkan Pengumuman Baru')

@section('content')

<h2 class="page-title">Tambahkan Pengumuman Baru</h2>

<div class="content-card">
    <form action="{{ route('pengumuman.store') }}" method="POST">
        @csrf
        
        <!-- Judul Field -->
        <div class="form-section">
            <label class="form-label">Judul :</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" 
                   id="judul" name="judul" placeholder="Masukkan judul" 
                   value="{{ old('judul') }}" required>
            @error('judul')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Deskripsi Field -->
        <div class="form-section">
            <label class="form-label">Deskripsi :</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                      id="deskripsi" name="deskripsi" 
                      placeholder="Masukkan deskripsi pengumuman" required>{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Tempat Field -->
        <div class="form-section">
            <label class="form-label">Tempat :</label>
            <input type="text" class="form-control @error('tempat') is-invalid @enderror" 
                   id="tempat" name="tempat" placeholder="Masukkan judul" 
                   value="{{ old('tempat') }}" required>
            @error('tempat')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Tanggal Field -->
        <div class="form-section">
            <label class="form-label">Tanggal :</label>
            <div class="input-group">
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" 
                       id="tanggal" name="tanggal" placeholder="yyyy/mm/dd" 
                       value="{{ old('tanggal') }}" required>
                <span class="input-group-text">
                    <i class="bi bi-calendar"></i>
                </span>
            </div>
            @error('tanggal')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn-kirim">Kirim</button>
    </form>
</div>

<!-- Daftar Pengumuman Section -->
<div class="table-section">
    <h3 class="table-title">Daftar Pengumuman</h3>
    
    @if($pengumuman->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tempat</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengumuman as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                        <td>{{ $item->tempat }}</td>
                        <td>{{ $item->tanggal->format('d F Y') }}</td>
                        <td>
                            <a href="{{ route('pengumuman.edit', $item->id) }}" class="btn-action btn-edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('pengumuman.destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-action btn-delete" 
                                        onclick="return confirm('Apakah Anda yakin?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $pengumuman->links() }}
        </div>
    @else
        <div class="alert alert-info">
            Belum ada pengumuman. <a href="{{ route('pengumuman.create') }}">Buat pengumuman baru</a>
        </div>
    @endif
</div>

@endsection
