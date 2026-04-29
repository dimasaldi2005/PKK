<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('laporan_penghayatan_pengamalan', function (Blueprint $table) {
            $table->bigIncrements('id_pokja1_bidang1');

            $table->uuid('uuid')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();

            $table->integer('jumlah_kel_simulasi1')->default(0);
            $table->integer('jumlah_anggota1')->default(0);

            $table->integer('jumlah_kel_simulasi2')->default(0);
            $table->integer('jumlah_anggota2')->default(0);

            $table->integer('jumlah_kel_simulasi3')->default(0);
            $table->integer('jumlah_anggota3')->default(0);

            $table->integer('jumlah_kel_simulasi4')->default(0);
            $table->integer('jumlah_anggota4')->default(0);

            $table->text('catatan')->nullable();
            $table->string('status', 50)->nullable();

            $table->unsignedBigInteger('id_role')->nullable();
            $table->unsignedBigInteger('id_organization')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan_penghayatan_pengamalan');
    }
};