<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('laporan_umum', function (Blueprint $table) {
            $table->bigIncrements('id_laporan_umum');

            // RELASI
            $table->unsignedBigInteger('id_role')->nullable();
            $table->unsignedBigInteger('id_organization')->nullable();

            // DATA UTAMA (dari database lama kamu)
            $table->integer('PKK_RW')->default(0);
            $table->integer('desa_wisma')->default(0);
            $table->integer('KRT')->default(0);
            $table->integer('KK')->default(0);

            // JIWA
            $table->integer('jiwa_laki')->default(0);
            $table->integer('jiwa_perempuan')->default(0);

            // ANGGOTA
            $table->integer('anggota_laki')->default(0);
            $table->integer('anggota_perempuan')->default(0);

            // KADER
            $table->integer('umum_laki')->default(0);
            $table->integer('umum_perempuan')->default(0);
            $table->integer('khusus_laki')->default(0);
            $table->integer('khusus_perempuan')->default(0);

            // SEKRETARIAT
            $table->integer('honorer_laki')->default(0);
            $table->integer('honorer_perempuan')->default(0);
            $table->integer('bantuan_laki')->default(0);
            $table->integer('bantuan_perempuan')->default(0);

            // LAINNYA
            $table->text('catatan')->nullable();
            $table->string('status')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan_umum');
    }
};
