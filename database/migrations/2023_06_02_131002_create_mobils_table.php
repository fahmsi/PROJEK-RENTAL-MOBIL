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
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('cc');
            $table->string('nomor_polisi');
            $table->string('warna');
            $table->string('tahun_mobil');
            $table->string('foto')->nullable();
            $table->integer('merk_id')->references('id')->on('merks');
            $table->integer('tipe_mobil_id')->references('id')->on('tipemobils');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobils');
    }
};
