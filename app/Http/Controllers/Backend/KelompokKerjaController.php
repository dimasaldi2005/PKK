<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class KelompokKerjaController extends Controller
{
    public function bidangUmum()
    {
        return view('backend.kelompok-kerja.bidang-umum');
    }

    public function pokja1()
    {
        return view('backend.kelompok-kerja.pokja1');
    }

    public function pokja2()
    {
        return view('backend.kelompok-kerja.pokja2');
    }

    public function pokja3()
    {
        return view('backend.kelompok-kerja.pokja3');
    }

    public function pokja4()
    {
        return view('backend.kelompok-kerja.pokja4');
    }
}
