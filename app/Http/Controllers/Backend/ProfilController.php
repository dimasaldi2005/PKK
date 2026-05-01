<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfilController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('backend.profil.index', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('backend.profil.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'nullable|email|max:255|unique:users,email,' . Auth::id(),
            'nomer_tlp'=> 'nullable|string|max:20',
            'alamat'   => 'nullable|string|max:255',
        ]);

        $user = Auth::user();
        $user->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'nomer_tlp' => $request->nomer_tlp,
            'alamat'    => $request->alamat,
        ]);

        return redirect()->route('profil.index')->with('success', 'Profil berhasil diperbarui.');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password'      => 'required',
            'password'              => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ], [
            'current_password.required'  => 'Kata sandi lama wajib diisi.',
            'password.required'          => 'Kata sandi baru wajib diisi.',
            'password.min'               => 'Kata sandi baru minimal 8 karakter.',
            'password.confirmed'         => 'Konfirmasi kata sandi tidak cocok.',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Kata sandi lama tidak sesuai.']);
        }

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('profil.index')->with('success', 'Kata sandi berhasil diubah.');
    }
}
