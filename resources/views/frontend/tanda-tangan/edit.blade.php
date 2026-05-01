@extends('layouts.admin')

@section('title', 'Edit Tanda Tangan')

@section('content')

<div style="margin-bottom: 24px;">
    <h2 style="font-size: 22px; font-weight: 700; color: #1a1a1a; margin: 0;">Edit Tanda Tangan</h2>
</div>

<div style="background: #fff; border-radius: 10px; padding: 25px 30px; box-shadow: 0 1px 3px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; max-width: 700px;">
    <form action="{{ route('tanda-tangan.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Nama Terang :</label>
            <input type="text" name="nama_terang" value="{{ old('nama_terang', $item->nama_terang) }}"
                   style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="@error('nama_terang') is-invalid @enderror">
            @error('nama_terang')<small style="color:#dc3545;">{{ $message }}</small>@enderror
        </div>

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Jabatan :</label>
            <select name="jabatan"
                    style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 10px 14px; font-size: 14px; background: #fff; outline: none;"
                    class="@error('jabatan') is-invalid @enderror">
                <option value="">--Pilih--</option>
                <option value="ketua"       {{ old('jabatan', $item->jabatan) == 'ketua'       ? 'selected' : '' }}>Ketua</option>
                <option value="sekretaris"  {{ old('jabatan', $item->jabatan) == 'sekretaris'  ? 'selected' : '' }}>Sekretaris</option>
                <option value="wakil_ketua" {{ old('jabatan', $item->jabatan) == 'wakil_ketua' ? 'selected' : '' }}>Wakil Ketua</option>
            </select>
            @error('jabatan')<small style="color:#dc3545;">{{ $message }}</small>@enderror
        </div>

        <div style="margin-bottom: 24px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">PokJa :</label>
            <select name="pokja"
                    style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 10px 14px; font-size: 14px; background: #fff; outline: none;"
                    class="@error('pokja') is-invalid @enderror">
                <option value="">--Pilih--</option>
                <option value="bidang_umum"      {{ old('pokja', $item->pokja) == 'bidang_umum'      ? 'selected' : '' }}>Bidang Umum</option>
                <option value="kelompok_kerja_1" {{ old('pokja', $item->pokja) == 'kelompok_kerja_1' ? 'selected' : '' }}>Kelompok Kerja 1</option>
                <option value="kelompok_kerja_2" {{ old('pokja', $item->pokja) == 'kelompok_kerja_2' ? 'selected' : '' }}>Kelompok Kerja 2</option>
                <option value="kelompok_kerja_3" {{ old('pokja', $item->pokja) == 'kelompok_kerja_3' ? 'selected' : '' }}>Kelompok Kerja 3</option>
                <option value="kelompok_kerja_4" {{ old('pokja', $item->pokja) == 'kelompok_kerja_4' ? 'selected' : '' }}>Kelompok Kerja 4</option>
            </select>
            @error('pokja')<small style="color:#dc3545;">{{ $message }}</small>@enderror
        </div>

        <div style="display: flex; justify-content: space-between; padding-top: 16px; border-top: 1px solid #f0f0f0;">
            <a href="{{ route('tanda-tangan.index') }}"
               style="background: #f0f0f0; color: #555; border-radius: 6px; padding: 10px 25px; font-size: 14px; font-weight: 600; text-decoration: none;">
                Batal
            </a>
            <button type="submit"
                    style="background: #1a6fd4; color: #fff; border: none; border-radius: 6px; padding: 10px 35px; font-size: 14px; font-weight: 600; cursor: pointer;">
                Simpan
            </button>
        </div>
    </form>
</div>

@endsection
