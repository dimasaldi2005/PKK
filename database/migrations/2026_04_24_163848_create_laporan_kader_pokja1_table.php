<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('laporan_kader_pokja1', function (Blueprint $table) {
            $table->bigIncrements('id_kader_pokja1');

            $table->uuid('uuid')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();

            $table->integer('PKBN')->default(0);
            $table->integer('PKDRT')->default(0);
            $table->integer('pola_asuh')->default(0);

            $table->text('catatan')->nullable();
            $table->string('status', 50)->nullable();

            $table->unsignedBigInteger('id_role')->nullable();
            $table->unsignedBigInteger('id_organization')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan_kader_pokja1');
    }
};
