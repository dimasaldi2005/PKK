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
        Schema::create('galeri_bidang_umum', function (Blueprint $table) {
            $table->id();
            $table->string('gambar')->nullable();
            $table->text('deskripsi')->nullable();
            $table->dateTime('tanggal');
            $table->string('status')->default('Upload 1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri_bidang_umum');
    }
};
