<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);

        $login = trim($request->login);
        $password = $request->password;

        // bersihkan nomor (hapus spasi)
        $login = str_replace(' ', '', $login);

        // 🔵 LOGIN ADMIN
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {

            if (Auth::guard('web')->attempt([
                'email' => $login,
                'password' => $password
            ])) {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }
        } else {

            // 🔥 NORMALISASI NOMOR
            // kalau input 62 → ubah ke 08
            if (substr($login, 0, 2) == '62') {
                $login = '0' . substr($login, 2);
            }

            // 🟢 LOGIN KECAMATAN

            if (Auth::guard('pengguna')->attempt([
                'phone_number' => $login,
                'password' => $password
            ])) {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            }
        }

        return back()->withErrors([
            'login' => 'Email / Nomor atau password salah',
        ]);
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        Auth::guard('pengguna')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Berhasil logout');
    }
}
