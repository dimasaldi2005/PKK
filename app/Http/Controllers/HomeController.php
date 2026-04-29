<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengumuman;

class HomeController extends Controller
{
    public function index()
    {
        $berita = Berita::orderBy('created_at', 'desc')->take(3)->get();
        $pengumuman = Pengumuman::orderBy('tanggal', 'desc')->take(3)->get();
        
        return view('home', compact('berita', 'pengumuman'));
    }
}
