<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TandaTangan extends Model
{
    protected $table = 'tanda_tangan';

    protected $fillable = [
        'nama_terang',
        'jabatan',
        'pokja',
    ];

    public function getJabatanLabel()
    {
        $labels = [
            'ketua'       => 'Ketua',
            'sekretaris'  => 'Sekretaris',
            'wakil_ketua' => 'Wakil Ketua',
        ];
        return $labels[$this->jabatan] ?? $this->jabatan;
    }

    public function getPokjaLabel()
    {
        $labels = [
            'bidang_umum'       => 'Bidang Umum',
            'kelompok_kerja_1'  => 'Kelompok Kerja 1',
            'kelompok_kerja_2'  => 'Kelompok Kerja 2',
            'kelompok_kerja_3'  => 'Kelompok Kerja 3',
            'kelompok_kerja_4'  => 'Kelompok Kerja 4',
        ];
        return $labels[$this->pokja] ?? $this->pokja;
    }
}
