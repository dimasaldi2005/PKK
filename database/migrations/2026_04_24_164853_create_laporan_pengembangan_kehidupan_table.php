<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('laporan_pengembangan_kehidupan', function (Blueprint $table) {
            $table->bigIncrements('id_pokja2_bidang2');

            $table->uuid('uuid')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();

            $table->integer('jumlah_kelompok_pemula')->default(0);
            $table->integer('jumlah_peserta_pemula')->default(0);

            $table->integer('jumlah_kelompok_madya')->default(0);
            $table->integer('jumlah_peserta_madya')->default(0);

            $table->integer('jumlah_kelompok_utama')->default(0);
            $table->integer('jumlah_peserta_utama')->default(0);

            $table->integer('jumlah_kelompok_mandiri')->default(0);
            $table->integer('jumlah_peserta_mandiri')->default(0);

            $table->integer('jumlah_kelompok_hukum')->default(0);
            $table->integer('jumlah_peserta_hukum')->default(0);

            $table->text('catatan')->nullable();
            $table->string('status', 50)->nullable();

            $table->unsignedBigInteger('id_role')->nullable();
            $table->unsignedBigInteger('id_organization')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan_pengembangan_kehidupan');
    }
};
