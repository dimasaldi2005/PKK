<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengumuman;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBerita = Berita::count();
        $totalPengumuman = Pengumuman::count();
        $beritaTerbaru = Berita::orderBy('created_at', 'desc')->take(5)->get();
        $pengumumanTerbaru = Pengumuman::orderBy('tanggal', 'desc')->take(5)->get();

        return view('dashboard', compact('totalBerita', 'totalPengumuman', 'beritaTerbaru', 'pengumumanTerbaru'));
    }
}
