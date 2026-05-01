@extends('layouts.admin')

@section('title', 'Tanda Tangan')

@section('content')

<div style="margin-bottom: 24px;">
    <h2 style="font-size: 22px; font-weight: 700; color: #1a1a1a; margin: 0;">Input Tanda Tangan Ketua</h2>
</div>

@if(session('success'))
    <div style="background: #d4edda; border: 1px solid #c3e6cb; border-radius: 8px; padding: 14px 16px; margin-bottom: 20px; color: #155724; font-size: 14px;">
        <i class="bi bi-check-circle" style="margin-right: 8px;"></i>{{ session('success') }}
    </div>
@endif

{{-- Form --}}
<div style="background: #fff; border-radius: 10px; padding: 25px 30px; box-shadow: 0 1px 3px rgba(0,0,0,0.08); margin-bottom: 30px; border: 1px solid #f0f0f0;">
    <form action="{{ route('tanda-tangan.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Nama Terang :</label>
            <input type="text" name="nama_terang" value="{{ old('nama_terang') }}"
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
                <option value="ketua"       {{ old('jabatan') == 'ketua'       ? 'selected' : '' }}>Ketua</option>
                <option value="sekretaris"  {{ old('jabatan') == 'sekretaris'  ? 'selected' : '' }}>Sekretaris</option>
                <option value="wakil_ketua" {{ old('jabatan') == 'wakil_ketua' ? 'selected' : '' }}>Wakil Ketua</option>
            </select>
            @error('jabatan')<small style="color:#dc3545;">{{ $message }}</small>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">PokJa :</label>
            <select name="pokja"
                    style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 10px 14px; font-size: 14px; background: #fff; outline: none;"
                    class="@error('pokja') is-invalid @enderror">
                <option value="">--Pilih--</option>
                <option value="bidang_umum"      {{ old('pokja') == 'bidang_umum'      ? 'selected' : '' }}>Bidang Umum</option>
                <option value="kelompok_kerja_1" {{ old('pokja') == 'kelompok_kerja_1' ? 'selected' : '' }}>Kelompok Kerja 1</option>
                <option value="kelompok_kerja_2" {{ old('pokja') == 'kelompok_kerja_2' ? 'selected' : '' }}>Kelompok Kerja 2</option>
                <option value="kelompok_kerja_3" {{ old('pokja') == 'kelompok_kerja_3' ? 'selected' : '' }}>Kelompok Kerja 3</option>
                <option value="kelompok_kerja_4" {{ old('pokja') == 'kelompok_kerja_4' ? 'selected' : '' }}>Kelompok Kerja 4</option>
            </select>
            @error('pokja')<small style="color:#dc3545;">{{ $message }}</small>@enderror
        </div>

        <div style="text-align: right;">
            <button type="submit" style="background: #1a6fd4; color: #fff; border: none; border-radius: 6px; padding: 10px 35px; font-size: 14px; font-weight: 600; cursor: pointer;">
                Kirim
            </button>
        </div>
    </form>
</div>

{{-- Tabel --}}
<h3 style="font-size: 20px; font-weight: 700; color: #1a1a1a; margin-bottom: 16px;">Daftar Tanda Tangan</h3>

<div style="background: #fff; border-radius: 12px; box-shadow: 0 1px 4px rgba(0,0,0,0.08); border: 1px solid #e8e8e8; overflow: hidden;">
    <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
        <thead>
            <tr style="border-bottom: 2px solid #e0e0e0;">
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 55px;">No</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222;">Nama Terang</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 130px;">Jabatan</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 160px;">Pokja</th>
                <th style="padding: 16px 20px; width: 90px;"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $index => $item)
            <tr style="border-bottom: 1px solid #eeeeee;">
                <td style="padding: 16px 20px; color: #333;">{{ $index + 1 }}</td>
                <td style="padding: 16px 20px; color: #333;">
                    {{ strlen($item->nama_terang) > 28 ? substr($item->nama_terang, 0, 28).'...' : $item->nama_terang }}
                </td>
                <td style="padding: 16px 20px; color: #333;">{{ $item->getJabatanLabel() }}</td>
                <td style="padding: 16px 20px; color: #333;">{{ $item->getPokjaLabel() }}</td>
                <td style="padding: 16px 20px;">
                    <div style="display: flex; gap: 8px;">
                        <a href="{{ route('tanda-tangan.edit', $item->id) }}"
                           style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; background: #28a745; color: white; border-radius: 6px; text-decoration: none;">
                            <i class="bi bi-pencil-fill" style="font-size: 13px;"></i>
                        </a>
                        <form action="{{ route('tanda-tangan.destroy', $item->id) }}" method="POST" style="margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus data ini?')"
                                    style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; background: #dc3545; color: white; border: none; border-radius: 6px; cursor: pointer;">
                                <i class="bi bi-trash-fill" style="font-size: 13px;"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="padding: 50px 20px; text-align: center; color: #aaa;">
                    <i class="bi bi-inbox" style="font-size: 40px; display: block; margin-bottom: 12px;"></i>
                    Belum ada data tanda tangan
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
