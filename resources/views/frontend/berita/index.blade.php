@extends('layouts.admin')

@section('page_title', 'Tambahkan Berita Baru')

@section('content')

<h2 class="page-title">Tambahkan Berita Baru</h2>

<div class="content-card">
    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <!-- Gambar Field -->
        <div class="form-section">
            <label class="form-label">Gambar</label>
            <div class="input-group">
                <input type="file" class="form-control @error('image') is-invalid @enderror" 
                       id="image" name="image" accept="image/*">
                <span class="input-group-text">
                    <i class="bi bi-image"></i>
                </span>
            </div>
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

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
                      placeholder="Masukkan deskripsi berita" required>{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Upload Dokumen Field -->
        <div class="form-section">
            <label class="form-label">Upload Dokumen Pendukung (Opsional)</label>
            <div class="input-group">
                <input type="file" class="form-control @error('file') is-invalid @enderror" 
                       id="file" name="file" accept=".pdf,.doc,.docx">
                <span class="input-group-text">
                    <i class="bi bi-file-earmark"></i>
                </span>
            </div>
            @error('file')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn-kirim">Kirim</button>
    </form>
</div>

<!-- Daftar Berita Section -->
<div class="table-section">
    <h3 class="table-title">Daftar Berita</h3>
    
    @if($berita->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($berita as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            @if($item->image)
                                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->judul }}" 
                                     style="width: 80px; height: 80px; object-fit: cover; border-radius: 4px;">
                            @else
                                <div class="img-placeholder">
                                    <i class="bi bi-image"></i>
                                </div>
                            @endif
                        </td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ Str::limit($item->deskripsi, 50) }}</td>
                        <td>
                            <a href="{{ route('berita.edit', $item->id) }}" class="btn-action btn-edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('berita.destroy', $item->id) }}" method="POST" style="display: inline;">
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
            {{ $berita->links() }}
        </div>
    @else
        <div class="alert alert-info">
            Belum ada berita. <a href="{{ route('berita.create') }}">Buat berita baru</a>
        </div>
    @endif
</div>

@endsection
