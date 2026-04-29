@extends('layouts.admin')

@section('page_title', 'Edit Berita')

@section('content')

<div class="row mb-4">
    <div class="col-md-12">
        <h2 class="mb-3" style="color: #333; font-weight: 600;">Edit Berita</h2>
        
        <!-- Form Card -->
        <div class="card border-0 shadow-sm" style="border-radius: 8px;">
            <div class="card-body p-4">
                <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <!-- Gambar Field -->
                    <div class="mb-3">
                        <label for="image" class="form-label" style="color: #555; font-weight: 500;">Gambar</label>
                        @if($berita->image)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->judul }}" 
                                     style="width: 150px; height: 150px; object-fit: cover; border-radius: 4px;">
                            </div>
                        @endif
                        <div class="input-group">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                   id="image" name="image" accept="image/*">
                            <span class="input-group-text" style="background-color: #f0f0f0;">
                                <i class="bi bi-image"></i>
                            </span>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <small class="text-muted">Format: JPEG, PNG, JPG, GIF (Max: 2MB)</small>
                    </div>

                    <!-- Judul Field -->
                    <div class="mb-3">
                        <label for="judul" class="form-label" style="color: #555; font-weight: 500;">Judul :</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" 
                               id="judul" name="judul" placeholder="Masukkan judul" 
                               value="{{ old('judul', $berita->judul) }}" required>
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Deskripsi Field -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label" style="color: #555; font-weight: 500;">Deskripsi :</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                  id="deskripsi" name="deskripsi" rows="4" 
                                  placeholder="Masukkan deskripsi berita" required>{{ old('deskripsi', $berita->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Upload Dokumen Field -->
                    <div class="mb-3">
                        <label for="file" class="form-label" style="color: #555; font-weight: 500;">Upload Dokumen Pendukung (Opsional)</label>
                        @if($berita->file)
                            <div class="mb-2">
                                <a href="{{ asset('storage/' . $berita->file) }}" target="_blank" class="btn btn-sm btn-info">
                                    <i class="bi bi-download"></i> Download File Lama
                                </a>
                            </div>
                        @endif
                        <div class="input-group">
                            <input type="file" class="form-control @error('file') is-invalid @enderror" 
                                   id="file" name="file" accept=".pdf,.doc,.docx">
                            <span class="input-group-text" style="background-color: #f0f0f0;">
                                <i class="bi bi-file-earmark"></i>
                            </span>
                            @error('file')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <small class="text-muted">Format: PDF, DOC, DOCX (Max: 5MB)</small>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" style="font-weight: 500; padding: 10px;">
                            Kirim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
