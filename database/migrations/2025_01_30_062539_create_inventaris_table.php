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
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_inventaris');
            $table->integer('id_jenis');
            $table->integer('nilai');
            $table->integer('tahun');
            $table->string('sumber');
            $table->string('lokasi');
            $table->string('foto');
            $table->string('bidang');
            $table->string('nama_pj');
            $table->string('kota');
            $table->string('user');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris');
    }
};
