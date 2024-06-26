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
        Schema::create('mobil', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_polisi');
            $table->string('warna');
            $table->integer('cc');
            $table->integer('harga_sewa');
            $table->unsignedBigInteger('merk_id');
            $table->string('gambar')->nullable();
            $table->foreign('merk_id')->references('id')->on('merk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobil');
    }
};
