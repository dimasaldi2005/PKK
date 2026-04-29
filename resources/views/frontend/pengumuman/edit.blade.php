@extends('layouts.admin')

@section('page_title', 'Edit Pengumuman')

@section('content')

<div class="row mb-4">
    <div class="col-md-12">
        <h2 class="mb-3" style="color: #333; font-weight: 600;">Edit Pengumuman</h2>
        
        <!-- Form Card -->
        <div class="card border-0 shadow-sm" style="border-radius: 8px;">
            <div class="card-body p-4">
                <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <!-- Judul Field -->
                    <div class="mb-3">
                        <label for="judul" class="form-label" style="color: #555; font-weight: 500;">Judul :</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" 
                               id="judul" name="judul" placeholder="Masukkan judul" 
                               value="{{ old('judul', $pengumuman->judul) }}" required>
                        @error('judul')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Deskripsi Field -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label" style="color: #555; font-weight: 500;">Deskripsi :</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                  id="deskripsi" name="deskripsi" rows="4" 
                                  placeholder="Masukkan deskripsi pengumuman" required>{{ old('deskripsi', $pengumuman->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tempat Field -->
                    <div class="mb-3">
                        <label for="tempat" class="form-label" style="color: #555; font-weight: 500;">Tempat :</label>
                        <input type="text" class="form-control @error('tempat') is-invalid @enderror" 
                               id="tempat" name="tempat" placeholder="Masukkan tempat" 
                               value="{{ old('tempat', $pengumuman->tempat) }}" required>
                        @error('tempat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tanggal Field -->
                    <div class="mb-3">
                        <label for="tanggal" class="form-label" style="color: #555; font-weight: 500;">Tanggal :</label>
                        <div class="input-group">
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" 
                                   id="tanggal" name="tanggal" placeholder="yyyy/mm/dd" 
                                   value="{{ old('tanggal', $pengumuman->tanggal->format('Y-m-d')) }}" required>
                            <span class="input-group-text" style="background-color: #0066cc; border: none;">
                                <i class="bi bi-calendar" style="color: white;"></i>
                            </span>
                            @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
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
