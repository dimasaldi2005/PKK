<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\GaleriBidangUmum;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function bidangUmum(Request $request)
    {
        $query = GaleriBidangUmum::query();

        // Filter berdasarkan bulan
        if ($request->filled('bulan')) {
            $query->whereMonth('tanggal', $request->bulan);
        }

        // Filter berdasarkan tahun
        if ($request->filled('tahun')) {
            $query->whereYear('tanggal', $request->tahun);
        }

        $galeri = $query->orderBy('tanggal', 'desc')->get();

        return view('backend.galeri.bidang-umum', compact('galeri'));
    }

    public function editBidangUmum($id)
    {
        $item = GaleriBidangUmum::findOrFail($id);
        return view('backend.galeri.edit-bidang-umum', compact('item'));
    }

    public function updateBidangUmum(Request $request, $id)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
            'status' => 'required|string',
        ]);

        $item = GaleriBidangUmum::findOrFail($id);
        $item->update($request->only('deskripsi', 'tanggal', 'status'));

        return redirect()->route('galeri.bidang-umum')->with('success', 'Data berhasil diperbarui');
    }

    public function deleteBidangUmum($id)
    {
        $item = GaleriBidangUmum::findOrFail($id);
        $item->delete();

        return redirect()->route('galeri.bidang-umum')->with('success', 'Data berhasil dihapus');
    }

    public function pokja1()
    {
        return view('backend.galeri.pokja1');
    }

    public function pokja2()
    {
        return view('backend.galeri.pokja2');
    }

    public function pokja3()
    {
        return view('backend.galeri.pokja3');
    }

    public function pokja4()
    {
        return view('backend.galeri.pokja4');
    }
}
