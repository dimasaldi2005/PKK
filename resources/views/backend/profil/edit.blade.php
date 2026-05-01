@extends('layouts.admin')

@section('title', 'Edit Profil')

@section('content')

<h2 style="font-size: 20px; font-weight: 700; color: #222; margin-bottom: 16px;">Edit Informasi Pribadi</h2>

<div style="background: #fff; border-radius: 10px; padding: 25px 30px; box-shadow: 0 1px 4px rgba(0,0,0,0.08);">
    <form action="{{ route('profil.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Nama Lengkap :</label>
            <input type="text"
                   name="name"
                   value="{{ old('name', $user->name) }}"
                   style="width: 100%; border: 1px solid #ccc; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="@error('name') is-invalid @enderror">
            @error('name')<small style="color: #dc3545;">{{ $message }}</small>@enderror
        </div>

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Email :</label>
            <input type="email"
                   name="email"
                   value="{{ old('email', $user->email) }}"
                   style="width: 100%; border: 1px solid #ccc; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="@error('email') is-invalid @enderror">
            @error('email')<small style="color: #dc3545;">{{ $message }}</small>@enderror
        </div>

        <div style="margin-bottom: 16px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Nomor Telepon :</label>
            <input type="text"
                   name="nomer_tlp"
                   value="{{ old('nomer_tlp', $user->nomer_tlp) }}"
                   style="width: 100%; border: 1px solid #ccc; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="@error('nomer_tlp') is-invalid @enderror">
            @error('nomer_tlp')<small style="color: #dc3545;">{{ $message }}</small>@enderror
        </div>

        <div style="margin-bottom: 20px;">
            <label style="font-size: 14px; color: #333; display: block; margin-bottom: 6px;">Alamat :</label>
            <input type="text"
                   name="alamat"
                   value="{{ old('alamat', $user->alamat) }}"
                   style="width: 100%; border: 1px solid #ccc; border-radius: 6px; padding: 10px 14px; font-size: 14px; outline: none;"
                   class="@error('alamat') is-invalid @enderror">
            @error('alamat')<small style="color: #dc3545;">{{ $message }}</small>@enderror
        </div>

        <div style="display: flex; justify-content: space-between; align-items: center;">
            <a href="{{ route('profil.index') }}"
               style="background: #6c757d; color: #fff; border-radius: 6px; padding: 10px 25px; font-size: 14px; font-weight: 600; text-decoration: none;">
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
