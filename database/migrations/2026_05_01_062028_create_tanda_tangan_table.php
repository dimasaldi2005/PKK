<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tanda_tangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_terang');
            $table->enum('jabatan', ['ketua', 'sekretaris', 'wakil_ketua']);
            $table->enum('pokja', ['bidang_umum', 'kelompok_kerja_1', 'kelompok_kerja_2', 'kelompok_kerja_3', 'kelompok_kerja_4']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanda_tangan');
    }
};
