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
        Schema::create('galery', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('judul', 255);
            $table->text('deskripsi');
            $table->string('file', 255);
            $table->timestamp('updated_at', 6);
            $table->timestamp('created_at', 6);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galeri');
    }
};
