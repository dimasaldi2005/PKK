@extends('layouts.admin')

@section('title', 'Edit Galeri - Bidang Umum')

@section('content')

<div style="margin-bottom: 30px;">
    <h2 style="font-size: 24px; font-weight: 700; color: #1a1a1a; margin: 0;">Edit Galeri Bidang Umum</h2>
    <p style="font-size: 14px; color: #666; margin: 6px 0 0 0;">Perbarui informasi galeri</p>
</div>

<div style="background: #fff; border-radius: 10px; padding: 30px; box-shadow: 0 1px 3px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; max-width: 700px;">
    <form action="{{ route('galeri.bidang-umum.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Deskripsi --}}
        <div style="margin-bottom: 24px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 8px; font-weight: 600;">Deskripsi</label>
            <textarea name="deskripsi"
                      style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 12px 14px; font-size: 14px; outline: none; font-family: 'Poppins', sans-serif; min-height: 120px; resize: vertical; transition: border-color 0.2s;"
                      class="@error('deskripsi') is-invalid @enderror"
                      placeholder="Masukkan deskripsi galeri...">{{ old('deskripsi', $item->deskripsi) }}</textarea>
            @error('deskripsi')
                <small style="color: #dc3545; display: block; margin-top: 6px;">{{ $message }}</small>
            @enderror
        </div>

        {{-- Tanggal --}}
        <div style="margin-bottom: 24px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 8px; font-weight: 600;">Tanggal & Waktu</label>
            <input type="datetime-local"
                   name="tanggal"
                   value="{{ old('tanggal', $item->tanggal->format('Y-m-d\TH:i')) }}"
                   style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 12px 14px; font-size: 14px; outline: none; transition: border-color 0.2s;"
                   class="@error('tanggal') is-invalid @enderror">
            @error('tanggal')
                <small style="color: #dc3545; display: block; margin-top: 6px;">{{ $message }}</small>
            @enderror
        </div>

        {{-- Status --}}
        <div style="margin-bottom: 30px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 8px; font-weight: 600;">Status</label>
            <input type="text"
                   name="status"
                   value="{{ old('status', $item->status) }}"
                   style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 12px 14px; font-size: 14px; outline: none; transition: border-color 0.2s;"
                   class="@error('status') is-invalid @enderror"
                   placeholder="Contoh: Upload 1">
            @error('status')
                <small style="color: #dc3545; display: block; margin-top: 6px;">{{ $message }}</small>
            @enderror
        </div>

        {{-- Buttons --}}
        <div style="display: flex; justify-content: space-between; align-items: center; padding-top: 20px; border-top: 1px solid #f0f0f0;">
            <a href="{{ route('galeri.bidang-umum') }}"
               style="background: #f0f0f0; color: #555; border-radius: 6px; padding: 11px 28px; font-size: 14px; font-weight: 600; text-decoration: none; transition: background 0.2s; display: inline-flex; align-items: center; gap: 6px;">
                <i class="bi bi-arrow-left"></i> Batal
            </a>
            <button type="submit"
                    style="background: #1a6fd4; color: #fff; border: none; border-radius: 6px; padding: 11px 28px; font-size: 14px; font-weight: 600; cursor: pointer; transition: background 0.2s; display: inline-flex; align-items: center; gap: 6px;">
                <i class="bi bi-check-circle"></i> Simpan Perubahan
            </button>
        </div>
    </form>
</div>

<style>
    input:focus, textarea:focus {
        border-color: #1a6fd4 !important;
        box-shadow: 0 0 0 3px rgba(26, 111, 212, 0.1);
    }

    a:hover, button:hover {
        opacity: 0.9;
    }
</style>

@endsection
