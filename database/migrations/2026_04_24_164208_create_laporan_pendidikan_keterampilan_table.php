<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('laporan_pendidikan_keterampilan', function (Blueprint $table) {
            $table->bigIncrements('id_pokja2_bidang1');

            $table->uuid('uuid')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();

            $table->integer('warga_buta')->default(0);

            $table->integer('kel_belajarA')->default(0);
            $table->integer('warga_belajarA')->default(0);

            $table->integer('kel_belajarB')->default(0);
            $table->integer('warga_belajarB')->default(0);

            $table->integer('kel_belajarC')->default(0);
            $table->integer('warga_belajarC')->default(0);

            $table->integer('kel_belajarKF')->default(0);
            $table->integer('warga_belajarKF')->default(0);

            $table->integer('paud')->default(0);
            $table->integer('taman_bacaan')->default(0);

            $table->integer('jumlah_klp')->default(0);
            $table->integer('jumlah_ibu_peserta')->default(0);
            $table->integer('jumlah_ape')->default(0);
            $table->integer('jumlah_kel_simulasi')->default(0);

            $table->integer('KF')->default(0);
            $table->integer('paud_tutor')->default(0);
            $table->integer('BKB')->default(0);
            $table->integer('koperasi')->default(0);
            $table->integer('ketrampilan')->default(0);
            $table->integer('LP3PKK')->default(0);
            $table->integer('TP3PKK')->default(0);
            $table->integer('damas_pkk')->default(0);

            $table->text('catatan')->nullable();
            $table->string('status', 50)->nullable();

            $table->unsignedBigInteger('id_role')->nullable();
            $table->unsignedBigInteger('id_organization')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan_pendidikan_keterampilan');
    }
};
