@extends('layouts.admin')

@section('title', 'Profil')

@section('content')

{{-- Informasi Pribadi --}}
<h2 style="font-size: 20px; font-weight: 700; color: #222; margin-bottom: 16px;">Informasi Pribadi</h2>

<div style="background: #fff; border-radius: 10px; padding: 25px 30px; box-shadow: 0 1px 4px rgba(0,0,0,0.08); margin-bottom: 30px;">

    <table style="font-size: 14px; color: #333; width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 6px 0; width: 160px; font-weight: 500;">Nama lengkap :</td>
            <td style="padding: 6px 0;">{{ $user->name }}</td>
        </tr>
        <tr>
            <td style="padding: 6px 0; font-weight: 500;">Email :</td>
            <td style="padding: 6px 0;">{{ $user->email ?? '-' }}</td>
        </tr>
        <tr>
            <td style="padding: 6px 0; font-weight: 500;">Nomor telepon :</td>
            <td style="padding: 6px 0;">{{ $user->nomer_tlp ?? '-' }}</td>
        </tr>
        <tr>
            <td style="padding: 6px 0; font-weight: 500;">Alamat :</td>
            <td style="padding: 6px 0;">{{ $user->alamat ?? '-' }}</td>
        </tr>
    </table>

    <div style="text-align: right; margin-top: 20px;">
        <a href="{{ route('profil.edit') }}"
           style="background: #1a6fd4; color: #fff; border-radius: 6px; padding: 8px 28px; font-size: 14px; font-weight: 600; text-decoration: none;">
            Edit
        </a>
    </div>
</div>

{{-- Ubah Kata Sandi --}}
<h2 style="font-size: 20px; font-weight: 700; color: #222; margin-bottom: 16px;">Ubah kata sandi</h2>

<div style="background: #fff; border-radius: 10px; padding: 25px 30px; box-shadow: 0 1px 4px rgba(0,0,0,0.08);">
    <form action="{{ route('profil.password') }}" method="POST">
        @csrf

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Masukkan Kata Sandi</label>
            <input type="password"
                   name="current_password"
                   style="width: 100%; border: 1px solid #ccc; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="@error('current_password') is-invalid @enderror">
            @error('current_password')
                <small style="color: #dc3545;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Masukkan Kata Sandi Baru</label>
            <input type="password"
                   name="password"
                   style="width: 100%; border: 1px solid #ccc; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="@error('password') is-invalid @enderror">
            @error('password')
                <small style="color: #dc3545;">{{ $message }}</small>
            @enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Konfirmasi Kata Sandi Baru</label>
            <input type="password"
                   name="password_confirmation"
                   style="width: 100%; border: 1px solid #ccc; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;">
        </div>

        <div style="text-align: right;">
            <button type="submit"
                    style="background: #1a6fd4; color: #fff; border: none; border-radius: 6px; padding: 10px 35px; font-size: 14px; font-weight: 600; cursor: pointer;">
                Simpan
            </button>
        </div>
    </form>
</div>

@endsection
