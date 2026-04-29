<?php

namespace App\Http\Controllers\backend;

use App\Models\Ttd;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Carbon;

class TtdController extends Controller
{
    public function index()
    {
        $data = Ttd::latest()->paginate();
        return view('backend.feature.ttd', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_terang' => 'required',
            'jabatan' => 'required',
            'pokja' => 'nullable',
        ]);

        Ttd::create([
            'nama_terang' => $request->nama_terang,
            'jabatan' => $request->jabatan,
            'pokja' => $request->pokja ?: null,
        ]);

        return redirect()->route('admin.ttd.index')->with(['success' => 'Berhasil Menambahkan Tanda Tangan']);
    }

    public function update(Request $request, string $id_ttds)
    {
        $request->validate([
            'nama_terang' => 'required',
            'jabatan' => 'required',
            'pokja' => 'nullable',
        ]);
    
        $data = Ttd::find($id_ttds);
        $data->update([
            'nama_terang' => $request->nama_terang,
            'jabatan' => $request->jabatan,
            'pokja' => $request->pokja,
        ]);
        
        return redirect()->route('admin.ttd.index')->with(['success' => 'Berhasil Mengedit Tanda Tangan']);
    }

    public function edit(string $id_ttds)
    {
        $data = Ttd::find($id_ttds);
        return view('backend.feature.edit_ttd', compact('data'));
    }

    public function destroy(string $id_ttds)
    {
        $data = Ttd::find($id_ttds);
        $data->delete();
        return redirect()->route('admin.ttd.index')->with(['success' => 'Berhasil Menghapus Tanda Tangan']);
    }
}
