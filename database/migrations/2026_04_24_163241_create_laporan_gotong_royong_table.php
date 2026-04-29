<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('laporan_gotong_royong', function (Blueprint $table) {
            $table->bigIncrements('id_pokja1_bidang2');

            $table->uuid('uuid')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();

            $table->integer('kerja_bakti')->default(0);
            $table->integer('rukun_kematian')->default(0);
            $table->integer('keagamaan')->default(0);
            $table->integer('jimpitan')->default(0);
            $table->integer('arisan')->default(0);

            $table->text('catatan')->nullable();
            $table->string('status', 50)->nullable();

            $table->unsignedBigInteger('id_role')->nullable();
            $table->unsignedBigInteger('id_organization')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan_gotong_royong');
    }
};