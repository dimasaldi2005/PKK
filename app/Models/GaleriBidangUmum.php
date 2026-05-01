<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GaleriBidangUmum extends Model
{
    protected $table = 'galeri_bidang_umum';

    protected $fillable = [
        'gambar',
        'deskripsi',
        'tanggal',
        'status',
    ];

    protected $casts = [
        'tanggal' => 'datetime',
    ];
}
