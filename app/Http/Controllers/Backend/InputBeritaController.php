<?php

namespace App\Http\Controllers\backend;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InputBeritaController extends Controller
{
    public function index()
    {
        $data = Berita::latest()->paginate();
        return view('backend.feature.input_berita', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5120',
            'judul' => 'required',
            'deskripsi' => 'required',
            'file' => 'nullable|file',
        ]);

        try {
            $data = [
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
            ];

            // upload image
            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('berita', 'public');
            }

            // upload file
            if ($request->hasFile('file')) {
                $data['file'] = $request->file('file')->store('berita/file', 'public');
            }

            Berita::create($data);

            return redirect()->route('admin.input_berita.index')
                ->with('success', 'Berhasil Menambahkan Berita');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $data = Berita::findOrFail($id);
        return view('backend.tampil_berita', compact('data'));
    }

    public function destroy($id)
    {
        $data = Berita::findOrFail($id);
        $data->delete();

        return redirect()->route('admin.input_berita.index')
            ->with('success', 'Berhasil Menghapus Berita');
    }
}
