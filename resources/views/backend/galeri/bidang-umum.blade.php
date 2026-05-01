@extends('layouts.admin')

@section('title', 'Galeri - Bidang Umum')

@section('content')

<div style="margin-bottom: 30px;">
    <h2 style="font-size: 24px; font-weight: 700; color: #1a1a1a; margin: 0;">Galeri Bidang Umum</h2>
    <p style="font-size: 14px; color: #666; margin: 6px 0 0 0;">Kelola galeri foto dan dokumentasi Bidang Umum</p>
</div>

{{-- Success Message --}}
@if(session('success'))
    <div style="background: #d4edda; border: 1px solid #c3e6cb; border-radius: 8px; padding: 14px 16px; margin-bottom: 20px; color: #155724; font-size: 14px;">
        <i class="bi bi-check-circle" style="margin-right: 8px;"></i>{{ session('success') }}
    </div>
@endif

{{-- Filter Section --}}
<div style="background: #fff; border-radius: 10px; padding: 20px 25px; box-shadow: 0 1px 3px rgba(0,0,0,0.08); margin-bottom: 25px; border: 1px solid #f0f0f0;">
    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
        <i class="bi bi-funnel" style="font-size: 18px; color: #1a6fd4;"></i>
        <h3 style="font-size: 15px; font-weight: 600; color: #333; margin: 0;">Filter Data</h3>
    </div>

    <form method="GET" action="{{ route('galeri.bidang-umum') }}" style="display: grid; grid-template-columns: 1fr 1fr 1fr auto auto; gap: 15px; align-items: flex-end;">
        <div>
            <label style="font-size: 13px; color: #555; display: block; margin-bottom: 6px; font-weight: 500;">Pilih Bulan</label>
            <select name="bulan" style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 9px 12px; font-size: 13px; background: #fff; outline: none; color: #333; transition: border-color 0.2s;">
                <option value="">Semua Bulan</option>
                @for($i = 1; $i <= 12; $i++)
                    <option value="{{ $i }}" {{ request('bulan') == $i ? 'selected' : '' }}>
                        {{ \Carbon\Carbon::createFromDate(2026, $i, 1)->format('F') }}
                    </option>
                @endfor
            </select>
        </div>

        <div>
            <label style="font-size: 13px; color: #555; display: block; margin-bottom: 6px; font-weight: 500;">Pilih Tahun</label>
            <select name="tahun" style="width: 100%; border: 1px solid #ddd; border-radius: 6px; padding: 9px 12px; font-size: 13px; background: #fff; outline: none; color: #333; transition: border-color 0.2s;">
                <option value="">Semua Tahun</option>
                @for($year = 2020; $year <= 2030; $year++)
                    <option value="{{ $year }}" {{ request('tahun') == $year ? 'selected' : '' }}>{{ $year }}</option>
                @endfor
            </select>
        </div>

        <div></div>

        <button type="submit" style="background: #1a6fd4; color: #fff; border: none; border-radius: 6px; padding: 9px 24px; font-size: 13px; font-weight: 600; cursor: pointer; transition: background 0.2s; display: flex; align-items: center; gap: 6px;">
            <i class="bi bi-search"></i> Filter
        </button>

        <a href="{{ route('galeri.bidang-umum') }}" style="background: #f0f0f0; color: #555; border-radius: 6px; padding: 9px 24px; font-size: 13px; font-weight: 600; text-decoration: none; transition: background 0.2s; display: flex; align-items: center; gap: 6px;">
            <i class="bi bi-arrow-clockwise"></i> Reset
        </a>
    </form>
</div>

{{-- Table Section --}}
<div style="background: #fff; border-radius: 12px; box-shadow: 0 1px 4px rgba(0,0,0,0.08); margin-bottom: 25px; border: 1px solid #e8e8e8; overflow: hidden;">
    <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
        <thead>
            <tr style="border-bottom: 2px solid #e0e0e0;">
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 55px;">No</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 130px;">Gambar</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222;">Deskripsi</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 130px;">Tanggal</th>
                <th style="padding: 16px 20px; text-align: left; font-weight: 700; color: #222; width: 100px;">Status</th>
                <th style="padding: 16px 20px; width: 90px;"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($galeri as $index => $item)
            <tr style="border-bottom: 1px solid #eeeeee;">
                <td style="padding: 18px 20px; color: #333; font-size: 15px;">{{ $index + 1 }}</td>
                <td style="padding: 18px 20px;">
                    @if($item->gambar && file_exists(public_path('storage/' . $item->gambar)))
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar"
                             style="width: 90px; height: 65px; object-fit: cover; border-radius: 6px; background: #e0e0e0;">
                    @else
                        <div style="width: 90px; height: 65px; background: #d9d9d9; border-radius: 6px;"></div>
                    @endif
                </td>
                <td style="padding: 18px 20px; color: #333; line-height: 1.6;">
                    {{ $item->deskripsi }}
                </td>
                <td style="padding: 18px 20px; color: #333; font-size: 13px; line-height: 1.6;">
                    {{ $item->tanggal->format('Y-m-d') }}<br>{{ $item->tanggal->format('H:i:s') }}
                </td>
                <td style="padding: 18px 20px; color: #333;">{{ $item->status }}</td>
                <td style="padding: 18px 20px;">
                    <div style="display: flex; gap: 8px; align-items: center;">
                        <a href="{{ route('galeri.bidang-umum.edit', $item->id) }}"
                           style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; background: #28a745; color: white; border-radius: 6px; text-decoration: none;">
                            <i class="bi bi-pencil-fill" style="font-size: 13px;"></i>
                        </a>
                        <form action="{{ route('galeri.bidang-umum.delete', $item->id) }}" method="POST" style="margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Hapus data ini?')"
                                    style="display: inline-flex; align-items: center; justify-content: center; width: 34px; height: 34px; background: #dc3545; color: white; border: none; border-radius: 6px; cursor: pointer;">
                                <i class="bi bi-trash-fill" style="font-size: 13px;"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="padding: 50px 20px; text-align: center; color: #aaa;">
                    <i class="bi bi-inbox" style="font-size: 40px; display: block; margin-bottom: 12px;"></i>
                    Belum ada data galeri
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{-- Action Buttons --}}
<div style="display: flex; justify-content: space-between; align-items: center;">
    <div></div>
    <button style="background: #1a6fd4; color: #fff; border: none; border-radius: 6px; padding: 11px 28px; font-size: 14px; font-weight: 600; cursor: pointer; transition: background 0.2s; display: flex; align-items: center; gap: 8px;">
        <i class="bi bi-download"></i> Unduh Laporan
    </button>
</div>

<style>
    select:hover {
        border-color: #1a6fd4;
    }

    button:hover {
        opacity: 0.9;
    }

    a:hover {
        opacity: 0.9;
    }
</style>

@endsection
