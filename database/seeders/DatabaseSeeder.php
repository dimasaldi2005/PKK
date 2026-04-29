<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // =========================
        // USER DEFAULT (Dimas)
        // =========================
        User::factory()->create([
            'name' => 'Dimas',
            'email' => 'dimas@gmail.com',
            'nomer_tlp' => '08123456789',
            'alamat' => 'Berbek',
            'password' => Hash::make('12345678'),
            'role' => 'kabupaten',
            'platform' => 'web',
        ]);

        // =========================
        // KABUPATEN
        // =========================
        User::create([
            'name' => 'Admin Kabupaten',
            'email' => 'kabupaten@gmail.com',
            'nomer_tlp' => null,
            'alamat' => 'Kantor Kabupaten',
            'password' => Hash::make('12345678'),
            'role' => 'kabupaten',
            'platform' => 'web',
        ]);

        // =========================
        // KECAMATAN
        // =========================
        User::create([
            'name' => 'Admin Kecamatan',
            'email' => null,
            'nomer_tlp' => '08111111111',
            'alamat' => 'Kantor Kecamatan',
            'password' => Hash::make('12345678'),
            'role' => 'kecamatan',
            'platform' => 'both',
        ]);

        // =========================
        // DESA
        // =========================
        User::create([
            'name' => 'Admin Desa',
            'email' => null,
            'nomer_tlp' => '08222222222',
            'alamat' => 'Kantor Desa',
            'password' => Hash::make('12345678'),
            'role' => 'desa',
            'platform' => 'mobile',
        ]);
    }
}