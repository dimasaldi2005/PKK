<?php

namespace App\Http\Controllers;

use App\Models\TandaTangan;
use Illuminate\Http\Request;

class TandaTanganController extends Controller
{
    public function index()
    {
        $data = TandaTangan::orderBy('created_at', 'desc')->get();
        return view('frontend.tanda-tangan.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_terang' => 'required|string|max:255',
            'jabatan'     => 'required|in:ketua,sekretaris,wakil_ketua',
            'pokja'       => 'required|in:bidang_umum,kelompok_kerja_1,kelompok_kerja_2,kelompok_kerja_3,kelompok_kerja_4',
        ]);

        TandaTangan::create($request->only('nama_terang', 'jabatan', 'pokja'));

        return redirect()->route('tanda-tangan.index')->with('success', 'Tanda tangan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = TandaTangan::findOrFail($id);
        return view('frontend.tanda-tangan.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_terang' => 'required|string|max:255',
            'jabatan'     => 'required|in:ketua,sekretaris,wakil_ketua',
            'pokja'       => 'required|in:bidang_umum,kelompok_kerja_1,kelompok_kerja_2,kelompok_kerja_3,kelompok_kerja_4',
        ]);

        $item = TandaTangan::findOrFail($id);
        $item->update($request->only('nama_terang', 'jabatan', 'pokja'));

        return redirect()->route('tanda-tangan.index')->with('success', 'Tanda tangan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        TandaTangan::findOrFail($id)->delete();
        return redirect()->route('tanda-tangan.index')->with('success', 'Tanda tangan berhasil dihapus.');
    }
}
